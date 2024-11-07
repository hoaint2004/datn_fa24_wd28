<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SneakerController extends Controller
{
    public function products()
    {
        return view("client.product");
    }

    public function productDetail()
    {
        return view("client.product-detail");
    }
}
