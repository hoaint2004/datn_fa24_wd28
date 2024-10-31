<?php

// use app\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/test', function () {
    return view('user.about');
});

Route::get('/testhome', function () {
    return view('user.homePage');
});

Route::get('/testfooter', function () {
    return view('user.footer');
});


Route::group(['prefix' => 'admin'], function(){
    Route::prefix('management')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::get('/product', [AdminController::class, 'product'])->name('product.management');
        Route::get('/category', [AdminController::class, 'category'])->name('category.management');
        Route::get('/account', [AdminController::class, 'account'])->name('account.management');
        Route::get('/order', [AdminController::class, 'order'])->name('order.management');
        Route::get('/comment', [AdminController::class, 'comment'])->name('comment.management');            
        Route::get('/review', [AdminController::class, 'review'])->name('review.management');            
        Route::get('/product-variants', [AdminController::class, 'product_variants'])->name('product_variants.management');            
        Route::get('/discount', [AdminController::class, 'discount'])->name('discount.management');            

        // CRUD Product
        Route::get('/product/create', [AdminController::class, 'product_create'])->name('product.create');
        Route::post('/product/create', [AdminController::class, 'product_store'])->name('product.store');
        Route::get('/product/edit/{product}', [AdminController::class, 'product_edit'])->name('product.edit');
        Route::put('/product/edit/{product}', [AdminController::class, 'product_update'])->name('product.update');
        Route::delete('/product/delete/{product}', [AdminController::class, 'product_destroy'])->name('product.destroy');

        // CRUD Category
        Route::get('/category/create', [AdminController::class, 'category_create'])->name('category.create');
        Route::post('/category/create', [AdminController::class, 'category_store'])->name('category.store');
        Route::get('/category/edit/{category}', [AdminController::class, 'category_edit'])->name('category.edit');
        Route::put('/category/edit/{category}', [AdminController::class, 'category_update'])->name('category.update');
        Route::delete('/category/delete/{category}', [AdminController::class, 'category_destroy'])->name('category.destroy');
    });
});


Route::middleware(['web'])->group(function () {
    Route::get('/home', [ProductController::class, 'home'])->name('home');
    Route::get('/about', [ProductController::class, 'about'])->name('about');
    Route::get('/category', [ProductController::class, 'category'])->name('category');
    Route::get('/product_detail', [ProductController::class, 'product_detail'])->name('product_detail');
    Route::get('/contact', [ProductController::class, 'contact'])->name('contact');
    Route::get('/cart', [ProductController::class, 'cart'])->name('cart');
    Route::get('/checkout', [ProductController::class, 'checkout'])->name('checkout');
    Route::get('/order-history', [ProductController::class, 'order_history'])->name('order_history');
    Route::get('/search', [ProductController::class, 'search'])->name('search');
    Route::get('/notFound', [ProductController::class, 'notFound'])->name('notFound');
});

    // Login - Register
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'postLogin'])->name('postLogin');
    Route::get('/register', [LoginController::class, 'register'])->name('register');
    Route::post('/register', [LoginController::class, 'postRegister'])->name('postRegister');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
