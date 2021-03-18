<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use DB , DataTables;

    class NotificationController extends Controller{
        public function index(Request $request){
        	if($request->ajax()){
                $data = DB::table('contact_us')->get();

                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $return = '<div class="btn-group">

                            <a href="'.route('admin.notification.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                <i class="fa fa-eye"></i>
                                            </a> &nbsp;

                                            <a class="btn btn-default btn-xs delete" onclick="change_status(this);" data-id="'.base64_encode($data->id).'">
                                                <i class="fa fa-trash"></i>
                                            </a> &nbsp;
                                           </div>';

                            return $return;
                        })

                        ->editColumn('status', function($data) {
                            if($data->status == 'readed'){
                                return '<span class="badge badge-pill badge-success">Readed</span>';
                            }else if($data->status == 'unreaded'){
                                return '<span class="badge badge-pill badge-warning">Unreaded</span>';
                            }else{
                                return '-';
                            }
                        })

                        ->rawColumns(['action', 'status'])
                        ->make(true);
            }

            return view('back.notification.index');
        }

        public function view(Request $request){
            $id = base64_decode($request->id);
            $notification = DB::table('contact_us')->where('id',$id)->first();
            return view('back.notification.view')->with(['notification'=>$notification]);
        }

        public function status(Request $request){
            $id = $request->id;
            if(isset($id) && $id != '' || $id != null){
                $crud = [
                    'status' => 'readed'
                ];
                $update = DB::table('contact_us')->where(['id' => $id])->update($crud);
                return redirect('admin/notification')->with('Success','Reacord Status Change Successfully');
            }
                return redirect('admin/notification')->with('Error','Faild To Change Reacord Status');
        }

        public function delete(Request $request){
            if(!$request->ajax()){ exit('No direct script access allowed'); }
            $id = base64_decode($request->id);
            if(isset($id) && $id != '' || $id != null){
                $notification = DB::table('contact_us')->where('id',$id)->delete();
                if($notification){
                    return response()->json(['code' => 200]);
                }else{
                    return response()->json(['code' => 201]);
                }
            }
        }
    }
