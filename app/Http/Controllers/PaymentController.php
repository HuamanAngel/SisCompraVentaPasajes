<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Models\Itinerario;
use App\Models\Compra;
use App\Models\Pasaje;

class PaymentController extends Controller
{

    public function index($id){
        $dataBus = Itinerario::findOrFail($id);
        $todosAsientos = Pasaje::where('iti_id',$id)->get('pas_numero_asiento');
        // dd($todosAsientos);
        return view('showAmount',compact('dataBus','todosAsientos'));
    }
    public function paymentExecute(Request $request){

        $fieldCreate= [
            'id'=> 'required',
            'asiento' =>'required',
            'costoBase'=>'required',
            'costoUbicacion'=>'required',
            'costoTotal'=>'required',
        ];
        $messageError=[
            'required' =>'Este campo :attribute es obligatorio',
        ];
        $validacion = Validator::make($request->all(),$fieldCreate,$messageError);
        if($validacion->fails()){
            $errorRegisterFailed = "Debe seleccionar algun asiento para poder comprar"; 
            return back()->with('errorBuy',$errorRegisterFailed);
        }

        $validacionItinerario = false;
        $validacionItinerario= $this->validarItinerario($request->id,$request);
        if($validacionItinerario == true){
            $montoTotal = 0;
            $montoTotal = $this->calcularMonto($request->costoBase,$request->asiento,$request->costoUbicacion,$request->costoTotal);
            if($montoTotal>0){
                DB::transaction(function () use($request,$montoTotal){

                    $pasaje = Pasaje::create([
                        'iti_id'=>$request->id,
                        'pas_estado_pasaje'=>'Comprado',
                        'pas_costo'=>$montoTotal,
                        'pas_numero_asiento'=>$request->asiento,
                        'pas_fecha_pasaje'=>now(),
                    ]);
                    $compraUser = Compra::create([
                        'use_id' => auth()->user()->id,
                        'pas_id'=>$pasaje->id,
                        'com_monto_compra'=>$montoTotal,
                        'com_fecha_compra'=>now(),        
                    ]);
                });
            }

            return back()->with('buySuccess',"La compra se pasaje fue ejecutada correctamente");
        }else if($validacionItinerario == false){
            return back()->with('errorBuy',"No se pudo efecutar la compra del pasaje, vuelva a intentar");
        }
    }
    public function validarItinerario($id,Request $request){
        $itinerario = Itinerario::findOrFail($id);
        if($itinerario->iti_price == $request->costoBase && $itinerario->iti_isAvailable==1 && $itinerario->iti_quantitySeat>0){            
            return true;
        }else{            
            return false;
        }
    }
    public function calcularMonto($costoBase,$asiento,$Ubicacion,$costoTotal){
        $montoTotal = $costoBase;
        if($asiento<=8 && $asiento>=0){
            $montoTotal+= 40;
            return $montoTotal;
        }else if($asiento>8){
            $montoTotal+= 20;
            return $montoTotal;
        }
        if($asiento<0){
            $montoTotal = 0;
            return $montoTotal;
        }
    }
}
