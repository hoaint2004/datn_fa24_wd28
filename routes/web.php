<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProductVariantsController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Controllers\SneakerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|WebRoutes
|--------------------------------------------------------------------------
|
|Hereiswhereyoucanregisterwebroutesforyourapplication.These
|routesareloadedbytheRouteServiceProviderandallofthemwill
|beassignedtothe"web"middlewaregroup.Makesomethinggreat!
|
*/

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/collections/sneakers',[SneakerController::class,'products'])->name('products');
Route::get('/product-detail/{id}',[SneakerController::class,'productDetail'])->name('productDetail');
Route::post('/cart',[CartController::class,'storeCart'])->name('storeCart');

Route::get('/login',[AuthController::class,'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/register',[AuthController::class,'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// route admin
Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::get('/',[DashboardController::class,'dashboard'])->name('dashboard');

    Route::controller(CategoryController::class)->name('categories.')
    ->prefix('categories')
    ->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/detail/{id}','detail')->name('detail');
    Route::post('/delete/{id}','delete')->name('delete');
    });

    Route::controller(ProductController::class)->name('products.')->prefix('products')
    ->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/detail/{id}','detail')->name('detail');
        Route::post('/delete/{id}','delete')->name('delete');
    });

    Route::controller(ProductVariantsController::class)->name('product_variants.')->prefix('product_variants')
    ->group(function(){
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/detail/{id}','detail')->name('detail');
        Route::delete('/delete/{id}','delete')->name('delete');
    });
});

// Route user
Route::middleware(['web'])->group(function () {
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/category', [ControllersProductController::class, 'category'])->name('category');
    Route::get('/product_detail', [ControllersProductController::class, 'product_detail'])->name('product_detail');
    Route::get('/contact', [ControllersProductController::class, 'contact'])->name('contact');
    Route::get('/cart', [ControllersProductController::class, 'cart'])->name('cart');
    Route::get('/order', [ControllersProductController::class, 'order'])->name('checkout');
    Route::get('/order-history', [ControllersProductController::class, 'order_history'])->name('order_history');
    Route::get('/search', [ControllersProductController::class, 'search'])->name('search');
    Route::get('/notFound', [ControllersProductController::class, 'notFound'])->name('notFound');
    Route::get('/account', [UserController::class, 'account'])->name('account');
    Route::put('/account/changePassword/{id}', [UserController::class, 'changePassword'])->name('changePassword');
});
