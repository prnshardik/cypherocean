<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\PortfolioRequest;
    use App\Models\Portfolio;
    use App\Models\PortfolioImages;
    use Illuminate\Http\Request;
    use DB, DataTables;

    class PortfolioController extends Controller{
        public function index(Request $request){
            if($request->ajax()){
                $data = DB::table('portfolio as p')
                            ->select('p.id', 'p.name', 'p.image', 'p.status', DB::Raw("SUBSTRING(".'p.description'.", 1, 50) as description"),  'pc.name as portfolio_category_name')
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

                                            <a href="#" class="btn btn-default btn-xs" onclick="change_status(this);" data-status="delete" data-id="'.base64_encode($data->id).'">
                                                <i class="fa fa-trash text-danger"></i>
                                            </a> &nbsp;
                                        </div>';

                            return $return;
                        })

                        ->editColumn('status', function($data) {
                            // dd($data->description);
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

            if(!empty($request->file('cover_image'))){
                $file = $request->file('cover_image');
                $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                $extension = $request->file('cover_image')->getClientOriginalExtension();
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
                $portfolio = DB::table('portfolio')->insertGetId($crud);
                if($portfolio){
                    if(!empty($request->file('cover_image'))){
                        $file->move($folder_to_upload, $filenameToStore);
                    }

                    if(!empty($request->file('other_image'))){
                        $file = $request->file('other_image');
                        foreach ($file as $files) {
                            $filenameWithExtension = $files->getClientOriginalName();
                            $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                            $extension = $files->getClientOriginalExtension();
                            $filenameToStore1 = time()."_".$filename.'.'.$extension;

                            $folder_to_upload = public_path().'/back/uploads/portfolio/';

                            if (!\File::exists($folder_to_upload)) {
                                \File::makeDirectory($folder_to_upload, 0777, true, true);
                            }
                            $files->move($folder_to_upload, $filenameToStore1);
                            $crud2 = [
                                'portfolio_id' => $portfolio,
                                'image' => $filenameToStore1,
                                'status' => 'Y',
                                'created_by' => auth()->user()->id,
                                'updated_by' => auth()->user()->id,
                                'created_at' => Date('Y-m-d H:i:s'),
                                'updated_at' => Date('Y-m-d H:i:s')
                            ];
                            $portfolio_image = DB::table('portfolio_images')->insertGetId($crud2);
                            // dd('in');
                        }
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

        public function view(Request $request){
            $id = base64_decode($request->id);
            
            $portfolio_categories = DB::table('portfolio_categories')->select('id', 'name')->where(['status' => 'active'])->get();
            $portfolio = DB::table('portfolio')
                        ->select('portfolio.*' ,'portfolio_categories.id AS cat_id','portfolio_categories.name AS cat_name')
                        ->join('portfolio_categories' ,'portfolio.portfolio_category_id' ,'portfolio_categories.id')
                        ->where('portfolio.id' ,$id)
                        ->first();

            $portfolio_images = DB::table('portfolio_images')->where('portfolio_id' ,$id)->get()->toArray();
                return view('back.portfolio.view')->with(['portfolio' => $portfolio , 'portfolio_images' => $portfolio_images ,'portfolio_categories' => $portfolio_categories]);
            
        }

        public function edit(Request $request){
            $id = base64_decode($request->id);
            
            $portfolio_categories = DB::table('portfolio_categories')->select('id', 'name')->where(['status' => 'active'])->get();
            $portfolio = DB::table('portfolio')
                        ->select('portfolio.*' ,'portfolio_categories.id AS cat_id','portfolio_categories.name AS cat_name')
                        ->join('portfolio_categories' ,'portfolio.portfolio_category_id' ,'portfolio_categories.id')
                        ->where('portfolio.id' ,$id)
                        ->first();

            $portfolio_images = DB::table('portfolio_images')->where('portfolio_id' ,$id)->get()->toArray();
            return view('back.portfolio.edit')->with(['portfolio' => $portfolio , 'portfolio_images' => $portfolio_images ,'portfolio_categories' => $portfolio_categories]);
        }

        public function update(Request $request){
            $id = $request->id;
            $crud = [
                'portfolio_category_id' => $request->portfolio_category_id,
                'name' => $request->name,
                'description' => $request->description,
                'updated_at' => Date('Y-m-d H:i:s'),
                'updated_by' => auth()->user()->id
            ];

            if(!empty($request->file('cover_image'))){

                $file = $request->file('cover_image');
                $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();
                $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                $filenameToStore = time()."_".$filename.'.'.$extension;

                $folder_to_upload = public_path().'/back/uploads/portfolio/';

                if (!\File::exists($folder_to_upload)) {
                    \File::makeDirectory($folder_to_upload, 0777, true, true);
                }

                $crud["image"] = $filenameToStore;
            }
            DB::enableQueryLog();
            $update_portfolio = Portfolio::where(['id' => $id])->update($crud);
            if($update_portfolio){
                if(!empty($request->file('other_image'))){
                    $delete_ext_record = DB::table('portfolio_images')->where('portfolio_id' , $id)->delete();

                    $file = $request->file('other_image');
                    foreach ($file as $files) {
                        $filenameWithExtension = $files->getClientOriginalName();
                        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);
                        $extension = $files->getClientOriginalExtension();
                        $filenameToStore1 = time()."_".$filename.'.'.$extension;

                        $folder_to_upload = public_path().'/back/uploads/portfolio/';

                        if (!\File::exists($folder_to_upload)) {
                            \File::makeDirectory($folder_to_upload, 0777, true, true);
                        }
                        $files->move($folder_to_upload, $filenameToStore1);
                        $crud2 = [
                            'portfolio_id' => $id,
                            'image' => $filenameToStore1,
                            'status' => 'Y',
                            'created_by' => auth()->user()->id,
                            'updated_by' => auth()->user()->id,
                            'created_at' => Date('Y-m-d H:i:s'),
                            'updated_at' => Date('Y-m-d H:i:s')
                        ];
                        $portfolio_image = DB::table('portfolio_images')->insertGetId($crud2);
                        if($portfolio_image){
                            return redirect()->route('admin.portfolio')->with('success', 'Portfolio updated successfully.');
                        }else{
                            return redirect()->route('admin.portfolio')->with('error', 'Faild to update Portfolio.');
                        }
                    }
                }else{
                    return redirect()->route('admin.portfolio')->with('success', 'Portfolio updated successfully.');
                }
            }else{
                return redirect()->route('admin.portfolio')->with('error', 'hulululul.');
            }
    }

    public function status(Request $request){
        if(!$request->ajax()){ exit('No direct script access allowed'); }
        $id = base64_decode($request->id);
        if(isset($id) && $id != '' || $id != null){
            $portfolio_images = PortfolioImages::where(['portfolio_id' => $id])->get();
            if($portfolio_images->isNotEmpty()){
                $portfolio_images = PortfolioImages::where(['portfolio_id' => $id])->delete();
            }else{
                $portfolio = Portfolio::where(['id' => $id])->delete();
                if($portfolio){
                    return response()->json(['code' => 200]);
                }else{
                    return response()->json(['code' => 201]);
                }
            }
        }else{
            return response()->json(['code' => 201]);
        }
    }
}
