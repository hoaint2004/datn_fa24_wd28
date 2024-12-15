<?php

use App\Http\Controllers\Admin\AdminOrderController;
use App\Http\Controllers\Admin\BannerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\SneakerController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ReviewsController;

use App\Http\Controllers\ProductVariantsController;
use App\Http\Controllers\CategoryController as ClientCategoryController;
use App\Http\Controllers\CommentController as ControllersCommentController;
use App\Http\Controllers\ProductController as ControllersProductController;
use App\Http\Middleware\RedirectIfAuthenticated;


use App\Http\Controllers\PaymentController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Hereiswhereyoucanregisterwebroutesforyourapplication.These
|routesareloadedbytheRouteServiceProviderandallofthemwill
|beassignedtothe"web"middlewaregroup.Makesomethinggreat!
|
*/

// Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/verify/{token}',[AuthController::class,'verify'])->name('verify');
// });



Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])
    ->name('password.forgotPassword');

Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])
    ->name('password.email');

Route::get('/forgot_password', [AuthController::class, 'showResetForm'])
    ->name('password.reset');

Route::post('/password/reset', [AuthController::class, 'reset'])
    ->name('password.update');


// route admin
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::controller(CategoryController::class)->name('categories.')
        ->prefix('categories')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/detail/{id}', 'detail')->name('detail');
            Route::post('/delete/{id}', 'delete')->name('delete');
        });

    Route::controller(ProductController::class)->name('products.')->prefix('products')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
            Route::get('/detail/{id}', 'detail')->name('detail');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        });

    Route::controller(ProductVariantsController::class)->name('product_variants.')->prefix('product_variants')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update/{id}', 'update')->name('update');
            Route::get('/detail/{id}', 'detail')->name('detail');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        });

    Route::controller(DiscountController::class)
        ->name('discounts.')
        ->prefix('discounts')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/show/{id}', 'show')->name('show');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
            Route::get('/detail/{id}', 'detail')->name('detail');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        });

    Route::controller(CommentController::class)
        ->name('comments.')
        ->prefix('comments')
        ->group(function () {
            Route::get('/', 'index')
                ->name('index');

            Route::get('/edit/{id}', 'edit')
                ->name('edit');

            Route::post('/update/{id}', 'update')
                ->name('update');

            Route::post('/delete/{id}', 'delete')
                ->name('delete');
        });

    Route::controller(BannerController::class)
        ->name('banners.')
        ->prefix('banners')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::put('/update/{id}', 'update')->name('update');
            Route::delete('/delete/{id}', 'delete')->name('delete');
        });
    // Route::get('/listUser',[AdminUserController::class,'index'])->name('listUser');
    Route::resource('reviews',ReviewsController::class);    

    Route::resource('orders', AdminOrderController::class);
});

// Route user
Route::middleware(['web'])->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/collections/sneakers', [SneakerController::class, 'products'])->name('products');
    Route::get('/quick-view/{id}', [SneakerController::class, 'quickView']);
    Route::get('/categories/{id}', [ClientCategoryController::class, 'categories'])->name('categories');
    Route::get('/product-detail/{id}', [SneakerController::class, 'productDetail'])->name('productDetail');
    Route::get('/cart', [CartController::class, 'showCart'])->name('showCart');
    Route::post('/addToCart', [CartController::class, 'addToCart'])->name('addToCart');
    Route::post('/cart/update-quantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::post('/cart/delete/{id}', [CartController::class, 'delete'])->name('cart.delete');
    // trang sp nổi bật
    Route::get('/featured_products/{type}',[ControllersProductController::class,'featured_products'])->name('featured_products');
    
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/category', [ControllersProductController::class, 'category'])->name('category');
    Route::get('/contact', [ControllersProductController::class, 'contact'])->name('contact');

    // lọc client
    Route::post('/filter',[FilterController::class,'filterProducts'])->name('filter');
    Route::get('/filterBestSeller',[FilterController::class,'filterBestSeller'])->name('filterBestSeller');

    Route::resource('/order', OrderController::class);
    Route::get('/ordersuccess', [OrderController::class, 'orderSuccess'])->name('order.success');
    Route::get('/order-history', [UserController::class, 'order_history'])->name('order_history');
    Route::get('/search', [ControllersProductController::class, 'search'])->name('search');
    Route::get('/notFound', [ControllersProductController::class, 'notFound'])->name('notFound');
    Route::get('/account', [UserController::class, 'account'])->name('account');
    Route::put('/account/changePassword/{id}', [UserController::class, 'changePassword'])->name('changePassword');
    // Route::get('/', [UserController::class, 'account'])->name('account');

    // Comment
    Route::post('/comment/{id}', [ControllersCommentController::class, 'comment'])->name('post_comment');
    Route::put('/comment/edit/{id}', [ControllersCommentController::class, 'update'])->name('update_comment');
    Route::delete('/comment/delete/{id}', [ControllersCommentController::class, 'destroy'])->name('destroy_comment');

     //Coongr thanh toán
     Route::post('/vnpay_payment', [PaymentController::class, 'vnpay_payment'])->name('vnpay_payment');
     Route::get('/vnpay/return', [PaymentController::class, 'vnpayReturn'])->name('vnpay.return');
 

    // review
    Route::post('/reviews',[ReviewsController::class,'store'])->name('reviews.store');

});

Route::get('/filter', function () {
    return view('user.filter-product');
});

Route::get('/succes', function(){
    return view('client.success-vnpay');
});

Route::get('/success-vnpay', function () {
    return view('client.success-vnpay');
});
