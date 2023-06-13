<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

public function showLogin(){
    return view('auth.login');
}
    public function create(){
        return view('auth.register');
    }
    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard')->with('name',auth()->user()->name);

        }
        else

        return redirect("showLogin")->withErrors([
            'error' => 'Opps! You have entered invalid credentials.',
        ]);


    }
    public function register(Request $request){

        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user=new User();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->save();



        return view('auth.login');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('showLogin');
    }
}
