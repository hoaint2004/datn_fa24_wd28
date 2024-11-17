<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Trả về view của bảng điều khiển admin
        return view('admin.dashboard');
    }
}
