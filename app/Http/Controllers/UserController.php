<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_login(){
        return view('user.login');
    }
    public function store_login(Request $request){
        if (!Auth::attempt($request->only('email', 'password'))) {
            toastr()->error('Username atau password salah!');
            return redirect()->route('user.login');
        }
    }
}
