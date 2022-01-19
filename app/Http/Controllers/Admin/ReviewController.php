<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use DB , DataTables;

    class ReviewController extends Controller{
        public function index(Request $request){
        	if($request->ajax()){
                $data = DB::table('review')->orderBy('id','desc')->get();

                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($data){
                            $return = '<div class="btn-group">

                            <a href="'.route('admin.review.view', ['id' => base64_encode($data->id)]).'" class="btn btn-default btn-xs">
                                                <i class="fa fa-eye"></i>
                                            </a> &nbsp;

                                            <a class="btn btn-default btn-xs delete" onclick="delete_record(this);" data-id="'.base64_encode($data->id).'">
                                                <i class="fa fa-trash"></i>
                                            </a> &nbsp;

                                            <a href="javascript:;" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-bars"></i>
                                            </a> &nbsp;
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="active" data-id="'.base64_encode($data->id).'">Active</a></li>
                                                <li><a class="dropdown-item" href="javascript:;" onclick="change_status(this);" data-status="pending" data-id="'.base64_encode($data->id).'">Inactive</a></li>
                                            </ul>
                                           </div>';

                            return $return;
                        })

                        ->editColumn('status', function($data) {
                            if($data->status == 'active'){
                                return '<span class="badge badge-pill badge-success">Active</span>';
                            }else if($data->status == 'pending'){
                                return '<span class="badge badge-pill badge-warning">Pending</span>';
                            }else if($data->status == 'deleted'){
                                return '<span class="badge badge-pill badge-danger">Deleted</span>';
                            }else{
                                return '-';
                            }
                        })

                        ->editColumn('star', function($data) {
                            if($data->star == '1'){
                                return '<div id="full_stars_example_two">
                                        <div class="rating-group">
                                          <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                          
                                          <input class="rating__input" name="rating3" checked id="rating3-1" value="1" type="radio">


                                          <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                          
                                          <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                          

                                          <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                          
                                          <input class="rating__input"  name="rating3" id="rating3-3" value="3" type="radio">
                                          

                                          <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                          
                                          <input class="rating__input"  name="rating3" id="rating3-4" value="4" type="radio">
                                          

                                          <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                          
                                          <input class="rating__input"  name="rating3" id="rating3-5" value="5" type="radio">
                                      </div>';

                            }else if($data->star == '2'){
                                return '<div id="full_stars_example_two">
                                    <div class="rating-group">
                                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">


                                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" checked  name="rating3" id="rating3-2" value="2" type="radio">
                                      

                                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-3" value="3" type="radio">
                                      

                                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-4" value="4" type="radio">
                                      

                                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-5" value="5" type="radio">
                                  </div>';

                            }else if($data->star == '3'){
                                return '<div id="full_stars_example_two">
                                    <div class="rating-group">
                                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">


                                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                      

                                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" checked  name="rating3" id="rating3-3" value="3" type="radio">
                                      

                                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-4" value="4" type="radio">
                                      

                                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-5" value="5" type="radio">
                                  </div>';

                            }else if($data->star == '4'){
                                return '<div id="full_stars_example_two">
                                    <div class="rating-group">
                                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">


                                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                      

                                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-3" value="3" type="radio">
                                      

                                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" checked  name="rating3" id="rating3-4" value="4" type="radio">
                                      

                                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-5" value="5" type="radio">
                                  </div>';

                            }else{
                                return '<div id="full_stars_example_two">
                                    <div class="rating-group">
                                      <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">


                                      <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                                      

                                      <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-3" value="3" type="radio">
                                      

                                      <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input"  name="rating3" id="rating3-4" value="4" type="radio">
                                      

                                      <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                      
                                      <input class="rating__input" checked  name="rating3" id="rating3-5" value="5" type="radio">
                                  </div>';

                            }
                        })

                        ->rawColumns(['action', 'status' ,'star'])
                        ->make(true);
            }

            return view('back.review.index');
        }

        public function view(Request $request){
            $id = base64_decode($request->id);
            $review = DB::table('review')->where('id',$id)->first();
            return view('back.review.view')->with(['review'=>$review]);
        }

        public function update(Request $request){
            $id =$request->id;
            if(isset($id) && $id != '' || $id !=null){
                $crud = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'star' => $request->rating3,
                    'feedback' => $request->feedback
                ];
                $review = DB::table('review')->where('id',$id)->update($crud);
                return redirect('admin/review')->with('Success','Reacord Edited Successfully');
            }
                return redirect('admin/review')->with('Error','Faild To Edit Reacord!');
        }

        public function status(Request $request){
            if(!$request->ajax()){ exit('No direct script access allowed'); }

            if(!empty($request->all())){
                $id = base64_decode($request->id);
                $status = $request->status;

                $district = DB::table('review')->where(['id' => $id])->first();

                if(!empty($district)){
                    $update = DB::table('review')->where(['id' => $id])->update(['status' => $status]);

                    if($update)
                        return response()->json(['code' => 200]);
                    else
                        return response()->json(['code' => 201]);
                }else{
                    return response()->json(['code' => 201]);
                }
            }else{
                return response()->json(['code' => 201]);
            }
        }

        public function delete(Request $request){
            if(!$request->ajax()){ exit('No direct script access allowed'); }
            $id = base64_decode($request->id);
            if(isset($id) && $id != '' || $id != null){
                $review = DB::table('review')->where('id',$id)->delete();
                if($review){
                    return response()->json(['code' => 200]);
                }else{
                    return response()->json(['code' => 201]);
                }
            }
        }
    }
