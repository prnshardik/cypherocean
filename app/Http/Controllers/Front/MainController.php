<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use DB;

    class MainController extends Controller{
        public function index(){
            $review = DB::table('review')->where('status' ,'active')->get();
            return view('front.index')->with('review' ,$review);
        }

        public function about(){
            return view('front.about');
        }

        public function web_development(){
            return view('front.web_development');
        }

        public function app_development(){
            return view('front.app_development');
        }

        public function uiux_design(){
            return view('front.uiux_design');
        }

        public function logo_design(){
            return view('front.logo_design');
        }

        public function contact(){
            return view('front.contact');
        }

        public function portfolio(){
            return view('front.portfolio');
        }

        public function contact_store(Request $request){
            if($request->ajax()){
                $rules = [
                    'name' => 'required',
                    'email' => 'required',
                    'subject' => 'required',
                    'message' => 'required'
                ];
                $validator = Validator::make($request->all(),$rules);

                if($validator->fails()){
                    return response()->json(['success' => false, 'status' => 200, 'message' => $validator->errors()->first()]);
                }

                $input = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'subject' => $request->subject,
                    'message' => $request->message,
                    'created_at' => Date('Y-m-d H:i:s'),
                    'updated_at' => Date('Y-m-d H:i:s')
                ];
                $user = DB::table('contact_us')->insert($input);
                if($user){
                    return 'OK';
                }else{
                    return false;
                }
            }
        }

        public function review_store(Request $request){
            $rules = [
                'name' => 'required',
                'email' => 'required',
                'rating3' => 'required',
                'feedback' => 'required'
            ];
            $validator = Validator::make($request->all(),$rules);

            if($validator->fails()){
                return response()->json(['success' => false, 'status' => 200, 'message' => $validator->errors()->first()]);
            }

            $input = [
                'name' => $request->name,
                'email' => $request->email,
                'star' => $request->rating3,
                'feedback' => $request->feedback,
                'created_at' => Date('Y-m-d H:i:s'),
                'updated_at' => Date('Y-m-d H:i:s')
            ];
            $user = DB::table('review')->insert($input);
            if($user){
                return redirect()->back()->with('Success' ,'Your Review Submited Successfully'); 
            }else{
                return redirect()->back()->with('Error' ,'Faild To Submit Your Review');
            }
        }
    }
