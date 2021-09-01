<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\HomeAdminController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ShipController;
use App\Http\Controllers\Backend\SlideController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Tạo router cho app

Route::get('/', function () {
    return view('welcome');
});
// Backend
Route::group(['prefix'=>'admin'], function() {

    Route::get('/', [HomeAdminController::class, 'home_admin'])->name('home_admin');

    Route::resource('category', CategoryController::class);

    Route::resource('product', ProductController::class);

    Route::resource('order', OrderController::class);

    Route::resource('blog', BlogController::class);

    Route::resource('banner', BannerController::class);

    Route::resource('slide', SlideController::class);

    Route::resource('user', CustomerController::class);

    Route::resource('ship', ShipController::class);

    Route::resource('payment', PaymentController::class);

    Route::resource('coupon', CouponController::class);

});
// Frontend
Route::group(['prefix'=>'organic'], function() {

    Route::get('home', [HomeController::class, 'home'])->name('home');

});
