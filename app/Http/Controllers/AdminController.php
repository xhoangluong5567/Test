<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function getLogin() {
        return view('backend.login');
    }

    public function postLogin(Request $request) {
        $arr = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if($request->remember_me = 'Remember Me'){
            $remember = true;
        }else{
            $remember = false;
        }

        if(Auth::attempt($arr, $remember)) {
            return redirect()->intended('admin');

        }
        else {
            return back()->withInput()->with('error','Tài khoản hoặc mật khẩu không đúng');
        }

    }
    public function getLogout(){
        Auth::logout();
        return redirect()->intended('login');
    }
    //
}
