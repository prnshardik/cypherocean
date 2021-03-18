<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\PortfolioRequest;
    use App\Models\Portfolio;
    use Illuminate\Http\Request;
    use DB, DataTables;

    class PortfolioController extends Controller{
        public function index(Request $request){
        	if($request->ajax()){
                $data = DB::table('portfolio as p')
                            ->select('p.id', 'p.name', 'p.image', 'p.status', DB::Raw("SUBSTRING(".'p.description'.", 0, 50) as description"),  'pc.name as portfolio_category_name')
                            ->leftjoin('portfolio_categories as pc', 'pc.id', 'p.portfolio_category_id')
                            ->get();

                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $return = '<div class="btn-group">
                                            <a href="'.route('admin.portfolio.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                <i class="fa fa-eye"></i>
                                            </a> &nbsp;

                                            <a href="'.route('admin.portfolio.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a> &nbsp;

                                            <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </a> &nbsp;
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                            </ul>
                                        </div>';

                            return $return;
                        })

                        ->editColumn('status', function($data) {
                            if($data->status == 'active'){
                                return '<span class="badge badge-pill badge-success">Active</span>';
                            }else if($data->status == 'inactive'){
                                return '<span class="badge badge-pill badge-warning">Inactive</span>';
                            }else{
                                return '-';
                            }
                        })

                        ->editColumn('image', function($data) {
                        	$url = asset('back/uploads/portfolio/'.$data->image);
                            return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
                        })

                        ->rawColumns(['action', 'status' ,'image'])
                        ->make(true);
            }

            return view('back.portfolio.index');
        }

        public function create(Request $request){
            $portfolio_categories = DB::table('portfolio_categories')->select('id', 'name')->where(['status' => 'active'])->get();

            return view('back.portfolio.create', ['portfolio_categories' => $portfolio_categories]);
        }

        public function insert(PortfolioRequest $request){
            if($request->ajax()){ return true; }
       
            $crud = [
                'name' => ucfirst($request->name),
                'portfolio_category_id' => $request->portfolio_category_id,
                'description' => $request->description,
                'status' => 'active',
                'created_at' => date('Y-m-d H:i:s'),
                'created_by' => auth()->user()->id,
                'updated_at' => date('Y-m-d H:i:s'),
                'updated_by' => auth()->user()->id
            ];

            if(!empty($request->file('image'))){
                $file = $request->file('image');
                $filenameWithExtension = $request->file('image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                $extension = $request->file('image')->getClientOriginalExtension();
                $filenameToStore = time()."_".$filename.'.'.$extension;

                $folder_to_upload = public_path().'/back/uploads/portfolio/';

                if (!\File::exists($folder_to_upload)) {
                    \File::makeDirectory($folder_to_upload, 0777, true, true);
                }

                $crud["image"] = $filenameToStore;
            }else{
                $crud["image"] = 'default.png';
            }

            DB::beginTransaction();
            try {
                $portfolio = Portfolio::create($crud);
                if($portfolio){
                    if(!empty($request->file('image'))){
                        $file->move($folder_to_upload, $filenameToStore);
                    }
                    DB::commit();
                    return redirect()->route('admin.portfolio')->with('success', 'Portfolio inserted successfully.');
                }else{
                    DB::rollback();
                    return redirect()->back()->with('error', 'Failed to insert record in user.')->withInput();
                }
            } catch (\Throwable $th) {
                DB::rollback();
                return redirect()->back()->with('error', 'Failed to insert record.')->withInput();
            }
        }

        public function edit(Request $request){
            $id = base64_decode($request->id);
            if(isset($id) && $id != '' || $id != null){
                $data = DB::table('portfolio')->where(['id' => $id])->first();
                $portfolio_categories = DB::table('portfolio_categories')->select('id', 'name')->where(['status' => 'active'])->get();

                return view('back.portfolio.edit', ['data' => $data]);
            }
            return redirect()->back()->with('error', 'something went wrong');
        }

        public function update(Request $request){
            $id = $request->id;
            if(isset($id) && $id != '' || $id != null){
                 $crud = [
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'email' => $request->email
                ];
                $update = DB::table('users')->where(['id' => $id])->update($crud);
                return redirect('admin/users')->with('Success','Reacord Status Change Successfully');
            }
                return redirect('admin/users')->with('Error','Faild To Change Reacord Status');
        }

        public function view(Request $request){
            $id = base64_decode($request->id);
            if(isset($id) && $id != '' || $id != null){
                $user = DB::table('users')->where('id' ,$id)->first();
                return view('back.users.view')->with('users',$user);
            }
        }

         public function change_status(Request $request){
            if(!$request->ajax()){ exit('No direct script access allowed'); }

            if(!empty($request->all())){
                $id = base64_decode($request->id);
                $status = $request->status;

                $users = DB::table('users')->where(['id' => $id])->first();

                if(!empty($users)){
                    DB::beginTransaction();
                    try {
                        if($status != 'deleted'){
                            $update = DB::table('users')->where(['id' => $id])->update(['status' => $status, 'updated_by' => auth()->user()->id]);

                            if($update){
                                DB::commit();
                                return response()->json(['code' => 200]);
                            }else{
                                DB::rollback();
                                return response()->json(['code' => 201]);
                            }
                        }else{
                            $delete = DB::table('users')->where('id',$id)->delete();
                            if($delete){
                                DB::commit();
                                return response()->json(['code' => 200]);
                            }else{
                                DB::rollback();
                                return response()->json(['code' => 201]);
                            }
                        }
                    } catch (\Throwable $th) {
                        DB::rollback();
                        return response()->json(['code' => 201]);
                    }
                }else{
                    return response()->json(['code' => 201]);
                }
            }else{
                return response()->json(['code' => 201]);
            }
        }
    }
