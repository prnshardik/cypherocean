<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class HomeController extends Controller{
        public function index(Request $request){
            return view('back.home');
        }

        public function page(Request $request){
            return view('back.page');
        }
    }
