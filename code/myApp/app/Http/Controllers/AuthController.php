<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function verify(Request $request)
    {
        $plainPass =$request->password;
        $user = User::where('email', $request->email)->first();
       
        if (Hash::check($plainPass, $user->password))
        {   
            Session::put('user',$user);
            session()->flash('Logged in Successfully');
            return view("index", compact('user'));
        }
        else{
            session()->flash('Logged in Failed');
            $error = 'Invalid Credentials';
            return view("layouts.page.login", compact('error'));
        }
        
    }
}
