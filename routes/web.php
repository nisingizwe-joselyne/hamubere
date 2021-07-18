<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [ ProductController::class, 'index']);
Route::get('/productdetail/{id}', [ ProductController::class, 'show'])->name('productdetail');
Route::get('/categorydetail/{id}', [ CategoryController::class, 'show'])->name('categorydetail');
Route::get('/blogdetail/{id}', [ BlogPostController::class, 'show'])->name('blogdetail');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/admin', 'admin.dashboard');
Route::get('/cart', [CartController::class,'getCart'])->name('checkout.cart');
Route::get('add-to-cart/{id}', [ProductController::class,'addToCart'])->name('add.cart');
Route::patch('updateCart', [ProductController::class,'updateCart'])->name('checkout.cart.update');
Route::DELETE('remove-from-cart', [ProductController::class,'removeItem'])->name('checkout.cart.clear');

Route::get('/checkout', [CheckoutController::class,'getCheckout'])->name('checkout.index');
Route::post('/checkout/order', [CheckoutController::class,'placeOrder'])->name('checkout.order');
