<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index(){
    if (auth()->check()) {

        $user = auth()->user();
        $name = $user->name;

        return view('dashboard')->with('name', $name);
    } else {
        return redirect()->route('showLogin');
    }

}
}
