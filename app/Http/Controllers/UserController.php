<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show_login(){
        return view('user.login');
    }
    public function store_login(Request $request){
        if (!Auth::attempt($request->only('email', 'password'))) {
            toastr()->error('Username atau password salah!');
            return back();
        }

        return redirect()->route('product.show');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.login.show');
    }
}
