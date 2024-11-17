<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function category(){

    }

    public function product_detail(){
        return view('client.product-detail');
    }

    public function contact(){

    }

    public function cart(){
        return view('client.cart');
    }
    
    public function order(){
        return view('client.order');
    }

    public function order_history(){}

    public function search(){
        return view('user.search');
    }

    public function notFound(){

    }
    

}

