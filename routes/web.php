<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserAdmin;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('nuevo',function(){
    return view('nuevo');
});
Route::get('template',function(){
    return view('template');
});

// Calculate Amount
Route::get('/calculateAmount/{id}',[PaymentController::class,'index'])->name('showAmount');


Route::get('/confirmationBuy',function(){
    return view('confirmationBuy');
})->name('confirmationBuy');

Route::get('/fetch-price',[ItinerarioController::class,'fetchPrice']);
Route::get('/fetch-service',[ItinerarioController::class,'fetchService']);
Route::get('/fetch-result-terminal',[ItinerarioController::class,'fetchResultTerminal']);

Route::get('Consulta', [CarController::class,'index'])->name('executeQuery');
Route::get('verConsulta', [ItinerarioController::class,'index'])->name('showAllBus');
Route::get('registrar',function(){
    return view('registrar');
});

Route::get('perfil',function(){
    return view('perfil');
});
Route::post('ResultadoConsulta', [ItinerarioController::class,'consulta_datos'])->name('result_query');



Route::get('verConsulta', [ConsultaController::class,'verConsulta']);
Route::get('perfil2',[UserController::class,'index'])->name('perfilUserNow');
Route::post('perfil2',[UserController::class,'editUser'])->name('perfilEditNow');
Route::get('perfil2/misPasajes',[UserController::class,'misPasajes'])->name('misPasajes');


Route::post('paymentMethod',[PaymentController::class,'paymentExecute'])->name('paymentMethod')->middleware('auth');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('userAdminClient', UserAdmin::class);
    Route::get('userAdminClient/edit/per',[UserAdmin::class,'edit'])->name('userAdminClient.edit.personalize');
    Route::get('userAdminClient/delete/per',[UserAdmin::class,'delete'])->name('userAdminClient.delete.personalize');    
    Route::get('/fetch-dni',[UserAdmin::class,'fetch_dni']);    
    Route::put('/fetch-data-all',[UserAdmin::class,'update']);    
});