<?php

use App\Http\Controllers\ItinerarioController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('nuevo',function(){
    return view('nuevo');
});
Route::get('template',function(){
    return view('template');
});

// Calculate Amount
Route::get('/calculateAmount',function(){
    return view('showAmount');
})->name('showAmount');


Route::get('/confirmationBuy',function(){
    return view('confirmationBuy');
})->name('confirmationBuy');

Route::get('/showAllBus',[ItinerarioController::class,'index'])->name('showAllBus');
Route::get('/fetch-price',[ItinerarioController::class,'fetchPrice']);
Route::get('/fetch-service',[ItinerarioController::class,'fetchService']);
