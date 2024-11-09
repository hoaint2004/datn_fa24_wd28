<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('client.home');
    }

    public function about(){
        return view('client.about');
    }

    public function account(){
        $user = Auth::user();
        return view('client.account', compact('user'));
    }
}
