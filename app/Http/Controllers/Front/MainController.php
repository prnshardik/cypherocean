<?php

    namespace App\Http\Controllers\Front;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class MainController extends Controller{
        public function index(){
            return view('front.index');
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

        public function contact_us(Request $request){
            dd($request);
        }
    }
