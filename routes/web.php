<?php

use Illuminate\Support\Facades\Route ;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\PaypalController;
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
    return view('home');
});
//

//stripe payment
Route::get('stripe', [StripeController::class , 'stripe'])->name('stripe.index');
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

//paypal payment
Route::prefix('/paypal')->controller(PaypalController::class)->group(function(){
Route::get('/','index')->name('payment.index');
Route::get('payment', 'payment')->name('payment');
Route::get('payment/cancel','cancel')->name('payment.cancel');
Route::get('payment/success', 'success')->name('payment.success');
});
