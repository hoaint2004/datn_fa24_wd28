<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
// đây là file api.php
Route::prefix('thongtinOrder')
    ->name('thongtinOrder.')
    ->controller(UserController::class)
    ->group(function(){
        Route::post('/updateOrder/{orderId}','updateOrderStatus')
            ->name('updateOrder');
        Route::post('/cancel/{orderId}','cancelOrder')
            ->name('cancel');
});

Route::prefix('orders')
    ->name('orders.')
    ->controller(OrderController::class)
    ->group(function () {

        // api thống kê đơn hàng
        Route::get('/getRevenueAndProfitData', 'getRevenueAndProfitData')
            ->name('getRevenueAndProfitData');
        // end api thống kê đơn hàng
});


// Route::name('api.admin.')
// ->controller(ClientProductController::class)
// ->group( function(){
//     Route::post('/filler')->name('filler');
   
// });