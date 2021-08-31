<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\HomeAdminController;
use App\Http\Controllers\Backend\ProductController;
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

});
// Frontend
Route::group(['prefix'=>'organic'], function() {

    Route::get('home', [HomeController::class, 'home'])->name('home');

});
