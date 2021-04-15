<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itinerario;

class CarController extends Controller
{
    public function index(){
        return view('Consulta');
    }
    //
    public function consulta_datos(Request $request){
        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_depa_origen','iti_depa_llegada','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_depa_origen','LIKE',"%{$request->CiudadOrigen}%")->where('iti_depa_llegada','LIKE',"%{$request->CiudadDestino}%")->orderBy('iti_isAvailable','DESC')->get();
        return view('VerConsulta',compact('allItinerario'));
    }
}
