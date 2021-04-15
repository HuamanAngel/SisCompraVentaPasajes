<?php

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

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('nuevo',function(){
    return view('nuevo');
});
Route::get('template',function(){
    return view('template');
});

Route::get('Consulta', [ConsultaController::class,'Consulta']);

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