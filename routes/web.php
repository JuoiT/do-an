<?php

use App\Http\Controllers\Backend\BannerController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CouponController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ShipController;
use App\Http\Controllers\Backend\SlideController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\DetailController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\WhishlistController;
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
Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {

    Route::get('/', [AdminController::class, 'index'])->name('home_admin');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');

    Route::resource('category', CategoryController::class);
    Route::get('/category-restore/{id}', [CategoryController::class, 'restore'])->name('category-restore');

    Route::resource('product', ProductController::class);
    Route::get('/product-restore/{id}', [ProductController::class, 'restore'])->name('product-restore');

    Route::resource('order', OrderController::class);

    Route::resource('blog', BlogController::class);

    Route::resource('banner', BannerController::class);
    Route::get('/banner-restore/{id}', [BannerController::class, 'restore'])->name('banner-restore');

    Route::resource('slide', SlideController::class);
    Route::get('/slide-restore/{id}', [SlideController::class, 'restore'])->name('slide-restore');

    Route::resource('user', CustomerController::class);

    Route::resource('ship', ShipController::class);

    Route::resource('payment', PaymentController::class);

    Route::resource('coupon', CouponController::class);
});


Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'postLogin'])->name('admin.postLogin');


// Frontend
Route::group(['prefix' => ''], function () {

    Route::get('/', [ShopController::class, 'home'])->name('home');

    Route::get('product', [ShopController::class, 'product'])->name('product');
    Route::get('filter-product', [ShopController::class, 'filter'])->name('filter_product');

    Route::get('detail/{id}', [DetailController::class, 'detail'])->name('detail');
    Route::post('detail-comment', [DetailController::class, 'addComment'])->name('add_comment');

    // Route::get('cart', [ShopController::class, 'cart'])->name('cart');
    Route::get('cart', [CartController::class, 'index'])->name('cart');
    Route::get('cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::get('cart/update', [CartController::class, 'update'])->name('cart.update');
    Route::get('cart/remove-item/{id}', [CartController::class, 'removeItem'])->name('cart.remove-item');
    Route::get('cart/remove-all', [CartController::class, 'removeAll'])->name('cart.remove-all');

    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout');
  
    Route::post('checkout', [CheckoutController::class, 'index'])->name('checkout');
    Route::post('checkout/submit', [CheckoutController::class, 'submit'])->name('checkout.submit');
    Route::get('checkout/table', [CheckoutController::class, 'getTable']);

    Route::get('whishlist', [WhishlistController::class, 'index'])->name('whishlist');
    Route::get('whishlist/add', [WhishlistController::class, 'add'])->name('whishlist.add');
    Route::get('whishlist/remove', [WhishlistController::class, 'remove'])->name('whishlist.remove');

    Route::get('my_account', [UserController::class, 'my_account'])->name('my_account');
    Route::post('my_account', [UserController::class, 'update_user'])->name('update_user');
    Route::get('my_account/order-cancel/{id}', [UserController::class, 'cancelOrder'])->name('order.cancel');
    Route::get('pass-reset', [UserController::class, 'resetPassword'])->name('password.reset');
    Route::post('pass-reset', [UserController::class, 'postResetPassword'])->name('password.reset');
    Route::get('pass-reset/confirm', [UserController::class, 'confirmResetPassword'])->name('password.reset.confirm');
    Route::post('pass-reset/confirm', [UserController::class, 'confirmResetPassword'])->name('password.reset.confirm');

    Route::get('register', [UserController::class, 'register'])->name('register');
    Route::post('register', [UserController::class, 'postRegister'])->name('post_register');

    Route::get('login', [UserController::class, 'login'])->name('login');
    Route::post('login', [UserController::class, 'postLogin'])->name('post_login');

    Route::get('logout', [UserController::class, 'logout'])->name('logout');

    Route::get('blog', [ShopController::class, 'blog'])->name('blog');

    Route::get('blog_detail/{id}', [ShopController::class, 'blog_detail'])->name('blog_detail');

    Route::get('contact', [ShopController::class, 'contact'])->name('contact');
});
