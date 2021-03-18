<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use DB , DataTables;

    class UsersController extends Controller{
        public function index(Request $request){
        	if($request->ajax()){
                $data = DB::table('users')->get();

                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $return = '<div class="btn-group">

                            <a href="'.route('admin.users.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                <i class="fa fa-eye"></i>
                                            </a> &nbsp;

                                            <a href="'.route('admin.users.edit', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                <i class="fa fa-edit"></i>
                                            </a> &nbsp;

                                            <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </a> &nbsp;
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="inactive" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="deleted" data-id="'.base64_encode($data->id).'">Delete</a></li>
                                            </ul>
                                           </div>';

                            return $return;
                        })

                        ->editColumn('status', function($data) {
                            if($data->status == 'active'){
                                return '<span class="badge badge-pill badge-success">Active</span>';
                            }else if($data->status == 'inactive'){
                                return '<span class="badge badge-pill badge-warning">Inactive</span>';
                            }else if($data->status == 'deleted'){
                                return '<span class="badge badge-pill badge-danger">Delete</span>';
                            }else{
                                return '-';
                            }
                        })

                        ->editColumn('name', function($data) {
                            return $data->firstname ." ". $data->lastname;
                        })

                        ->editColumn('image', function($data) {
                        	$url = asset('back/img/'.$data->image);
                            return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';
                        })

                        ->rawColumns(['action', 'status' ,'image'])
                        ->make(true);
            }

            return view('back.users.index');
        }


        public function edit(Request $request){
            $id = base64_decode($request->id);
            if(isset($id) && $id != '' || $id != null){
                $user = DB::table('users')->where('id' ,$id)->first();
                return view('back.users.edit')->with('users',$user);
            }
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
