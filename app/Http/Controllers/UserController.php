<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class UserController extends Controller
{
    //
    function auth(Request $requet){
        $credentials = $requet->only('email','password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('template');
        }

        return redirect()->back();
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }
}