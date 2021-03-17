<?php

    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use App\Http\Requests\LoginRequest;
    use Auth, Validator, DB, Mail;

    class AuthController extends Controller{
        public function login(Request $request){
            return view('back.auth.login');
        }

        public function signin(LoginRequest $request){
            if($request->ajax()){ return true; }

            $auth = auth()->attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 'Y']);
            if($auth != false){
                $user = auth()->user();

                if($user->status == 'inactive'){
                    Auth::logout();
                    return redirect()->route('admin.login')->with('error', 'Account belongs to this credentials is inactive, please contact administrator');
                }elseif($user->status == 'deleted'){
                    Auth::logout();
                    return redirect()->route('admin.login')->with('error', 'Account belongs to this credentials is deleted, please contact administrator');
                }else{
                    return redirect()->route('admin.home')->with('success', 'Login successfully');
                }
            }else{
                return redirect()->route('admin.login')->with('error', 'invalid credentials, please check credentials');
            }
        }

        public function logout(Request $request){
            Auth::logout();
            return redirect()->route('admin.login');
        }
    }
