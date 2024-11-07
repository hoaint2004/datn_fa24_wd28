<?php

// use app\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\AccountController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SneakerController;
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

Route::get('/',                     [HomeController::class, 'home'])->name('home');
Route::get('/collections/sneakers', [SneakerController::class, 'products'])->name('products');
Route::get('/product-detail/{id}',  [SneakerController::class, 'productDetail'])->name('productDetail');
Route::post('/cart',                [CartController::class, 'storeCart'])->name('storeCart');

Route::get('/login',                        [AuthController::class, 'showLoginForm'])
        ->name('login.form');
Route::get('/register',                     [AuthController::class, 'showRegisterForm'])
        ->name('register.form');

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])
            ->name('dashboard');

        Route::controller(CategoryController::class)
            ->name('categories.')
            ->prefix('categories')
            ->group(function () {
                Route::get('/', 'index')
                    ->name('index');

                Route::get('/create', 'create')
                    ->name('create');

                Route::post('/store', 'store')
                    ->name('store');

                Route::get('/edit/{id}', 'edit')
                    ->name('edit');

                Route::post('/update/{id}', 'update')
                    ->name('update');

                Route::get('/detail/{id}', 'detail')
                    ->name('detail');

                Route::post('/delete/{id}', 'delete')
                    ->name('delete');
            });

        Route::controller(ProductController::class)
            ->name('products.')
            ->prefix('products')
            ->group(function () {
                Route::get('/', 'index')
                    ->name('index');

                Route::get('/create', 'create')
                    ->name('create');

                Route::post('/store', 'store')
                    ->name('store');

                Route::get('/show/{id}', 'show')
                    ->name('show');

                Route::get('/edit/{id}', 'edit')
                    ->name('edit');

                Route::post('/update/{id}', 'update')
                    ->name('update');

                Route::get('/detail/{id}', 'detail')
                    ->name('detail');

                Route::post('/delete/{id}', 'delete')
                    ->name('delete');
            });
    });