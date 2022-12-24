<?php

use App\Http\Controllers\CheckoutController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/call_back',[CheckoutController::class,'call_back'])->name('call_back');


Route::get('/checkout',[CheckoutController::class,'view_checkout_page']);

Route::post('/initiate_payment',[CheckoutController::class,'initiate_payment'])->name('initiate_payment');

//manage transactions

Route::get('/query/{tran_ref}',[CheckoutController::class,'query']);

Route::get('/capture',[CheckoutController::class,'capture']);

Route::get('/void',[CheckoutController::class,'void']);

Route::get('/refund',[CheckoutController::class,'refund']);
