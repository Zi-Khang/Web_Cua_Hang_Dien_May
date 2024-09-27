<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderDetailController;
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
    return view('HomePage');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/checkLogin', [AuthController::class, 'checkLogin'])->name('checkLogin');

Route::prefix('customer')->middleware('customer')->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('customer.index');
    Route::get('/product_detail/{product}', [ProductController::class, 'product_detail'])->name('product_detail');
    Route::get('/addToCart/{id}', [CartController::class, 'addToCart'])->name('addToCart');
    Route::get('/deleteCartItem/{id}', [CartController::class, 'deleteCartItem'])->name('deleteCartItem');
    Route::get('/update-cart-quantity/{id}', [CartController::class, 'updateCartQuantity'])->name('updateCartQuantity');
    Route::get('/checkOut', [CartController::class, 'checkOut'])->name('checkOut');
    Route::get('/order_index', [OrderController::class, 'order_index'])->name('order_index');
    Route::get('/order_detail/{order}', [OrderDetailController::class, 'order_detail'])->name('order_detail');
    
});

Route::prefix('admin')->middleware('admin')->group(function (){
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/product', [ProductController::class, 'product_index'])->name('product_index');
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');
    Route::get('/edit/{product}', [ProductController::class, 'edit'])->name('edit');
    Route::post('/update/{product}', [ProductController::class, 'update'])->name('update');
});

