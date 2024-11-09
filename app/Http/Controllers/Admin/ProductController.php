<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        return view('admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.pages.products.create');
    }

    public function store()
    {
        DB::beginTransaction();
        try {

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }

    public function detail()
    {
        return view('admin.pages.products.detail');
    }

    public function edit()
    {
        return view('admin.pages.products.edit');
    }

    public function update()
    {
        DB::beginTransaction();
        try {

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }

    public function delete()
    {
        DB::beginTransaction();
        try {

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
