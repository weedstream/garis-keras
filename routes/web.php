<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\CheckoutController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'index_fe'])->name('home');
Route::get('/product', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::post('/product', [App\Http\Controllers\HomeController::class, 'store'])->name('addtocart');
Route::patch('/product', [App\Http\Controllers\HomeController::class, 'kupon'])->name('cek.kupon');
Route::delete('/product', [App\Http\Controllers\HomeController::class, 'destroy'])->name('clearcart');
Route::delete('/cart/{id}', [App\Http\Controllers\HomeController::class, 'hapus_item'])->name('hapus_item');
// Route::get('/testimonials', [TestimonialController::class, 'index'])->name('update');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('store');
Route::get('/payment', [App\Http\Controllers\Payment::class, 'index'])->name('payment');
Route::get('/product/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('product.detail');
Route::get('/checkout/{id}', [CheckoutController::class, 'show'])->name('checkout.detail');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

Auth::routes();

// prefixs url, seluruh url mengandung awalan v1
// contoh http://127.0.0.1:8000/v1/product dan seterusnya
Route::prefix('admin')->group(function () {

    // dashboard
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('dashboard');

    // route product
    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
    Route::resource('voucher', App\Http\Controllers\Admin\VoucherController::class);

});
