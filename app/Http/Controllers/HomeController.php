<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('user.homePage');
    }

    public function about(){
        return view('user.about');
    }

    public function account(){
        $user = Auth::user();
        // dd($user);
        return view('client.account', compact('user'));
    }

    public function changePassword(){
        
    }
}
