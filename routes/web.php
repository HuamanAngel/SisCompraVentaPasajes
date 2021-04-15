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

// Route::resource('user', [UserController::class]);

// Route::get('/showAllBus',[ItinerarioController::class,'index'])->name('showAllBus');
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
// Route::post('ResultadoConsulta', [CarController::class,'consulta_datos'])->name('result_query');
Route::post('ResultadoConsulta', [ItinerarioController::class,'consulta_datos'])->name('result_query');



Route::get('verConsulta', [ConsultaController::class,'verConsulta']);

Route::get('RegistrarCliente',function(){
    return view('CrearCliente');
});

Route::get('ModificarCliente',function(){
    return view('ModificarCliente');
});

Route::get('EliminarCliente',function(){
    return view('EliminarCliente');
});
Route::get('perfil2',[UserController::class,'index'])->name('perfilUserNow');
Route::post('perfil2',[UserController::class,'editUser'])->name('perfilEditNow');
