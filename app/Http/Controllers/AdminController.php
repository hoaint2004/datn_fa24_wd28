<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashbroad');
    }

    public function product(){
        return view('admin.product');

    }

    public function category(){
        return view('admin.category');

    }

    public function product_variants(){
        return view('admin.product-variants');

    }

    public function account(){
        return view('admin.account');

    }

    public function order(){
        return view('admin.order');

    }

    public function comment(){
        return view('admin.comment');

    }

    public function discount(){
        return view('admin.discount');

    }

    public function reviews(){
        return view('admin.reviews');

    }

    
}
