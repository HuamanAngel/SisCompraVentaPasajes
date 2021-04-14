<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itinerario;

class ItinerarioController extends Controller
{
    public function index(){
        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_isAvailable','DESC')->get();
        return view('VerConsulta',compact('allItinerario'));
    }
    // 1 : Para Precio
    // 2 : Para Salida
    // 3 : Para Disponible
    // 4 : Para Cantidad de Asientos
    // 5 : Para Servicios

    // 1 : Descendente
    // 2 : Ascendente
    public function fetchPrice(Request $request){
        if($request->ajax()){
            if($request->valueService == -1 || $request->valueService == 0){
                if($request->optionFilter==1){
                    if($request->directionFilter == 1){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_price','DESC')->get();
                    }else if($request->directionFilter == 2){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_price','ASC')->get();
                    }
                }
                if($request->optionFilter==2){
                    if($request->directionFilter == 1){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_salida','DESC')->get();
                    }else if($request->directionFilter == 2){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_salida','ASC')->get();
                    }
                }
                if($request->optionFilter==3){
                    if($request->directionFilter == 1){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_isAvailable','DESC')->get();
                    }else if($request->directionFilter == 2){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_isAvailable','ASC')->get();
                    }
                }
                if($request->optionFilter==4){
                    if($request->directionFilter == 1){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_quantitySeat','DESC')->get();
                    }else if($request->directionFilter == 2){
                        $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_quantitySeat','ASC')->get();
                    }
                }
            }else{                
                if($request->valueService == 1){
                    $serviceName = "WIFI";
                    $allItinerario = $this->selectServiceFilter($request,$serviceName);
                }
                if($request->valueService == 2){
                    $serviceName = "TV";
                    $allItinerario = $this->selectServiceFilter($request,$serviceName);
                }
                if($request->valueService == 3){
                    $serviceName = "Baño";
                    $allItinerario = $this->selectServiceFilter($request,$serviceName);
                }
                if($request->valueService == 4){
                    $serviceName = "Ninguno";
                    $allItinerario = $this->selectServiceFilter($request,$serviceName);
                }

            }

            return view('partials.busContent',compact('allItinerario'));     
        }
        return "Error en el servidor";
    }

    public function fetchService(Request $request){
        if($request->ajax()){
            if($request->optionFilterService==0){
                $serviceName = "WIFI";
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->orderBy('iti_price','ASC')->get();
            }

            if($request->optionFilterService==1){
                $serviceName = "WIFI";
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_price','ASC')->get();
            }
            if($request->optionFilterService==2){
                $serviceName = "TV";
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_price','ASC')->get();
            }
            if($request->optionFilterService==3){
                $serviceName = "Baño";
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_price','ASC')->get();
            }
            if($request->optionFilterService==4){
                $serviceName = "Ninguno";
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_price','ASC')->get();
            }

            return view('partials.busContent',compact('allItinerario'));     

        }
        return "Error en el servidor para mostrar los servicios";
    }


    public function selectServiceFilter(Request $request,string $serviceName){
        if($request->optionFilter==1){
            if($request->directionFilter == 1){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_price','DESC')->get();
            }else if($request->directionFilter == 2){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_price','ASC')->get();
            }
        }
        if($request->optionFilter==2){
            if($request->directionFilter == 1){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_salida','DESC')->get();
            }else if($request->directionFilter == 2){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_salida','ASC')->get();
            }
        }
        if($request->optionFilter==3){
            if($request->directionFilter == 1){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_isAvailable','DESC')->get();
            }else if($request->directionFilter == 2){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_isAvailable','ASC')->get();
            }
        }
        if($request->optionFilter==4){
            if($request->directionFilter == 1){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_quantitySeat','DESC')->get();
            }else if($request->directionFilter == 2){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_service',$serviceName)->orderBy('iti_quantitySeat','ASC')->get();
            }
        }        
        return $allItinerario;
    }
    // Terminales
    // Terminal de llegada : 1
    // Terminal de salida : 2
    public function fetchResultTerminal(Request $request){
        if($request->ajax()){
            // if($request->nameFilter==null || $request->nameFilter=="" || $request->nameFilter==" "){
            // }
            if($request->optionFilter == 1){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_terminal_llegada','LIKE',"%{$request->nameFilter}%")->orderBy('iti_quantitySeat','DESC')->get();
            }
            if($request->optionFilter == 2){
                $allItinerario = Itinerario::select('iti_price','iti_terminal_llegada','iti_terminal_origen','iti_salida','iti_isAvailable','iti_quantitySeat','iti_service')->where('iti_terminal_origen','LIKE',"%{$request->nameFilter}%")->orderBy('iti_quantitySeat','DESC')->get();
            }
            // return $request->nameFilter;
            return view('partials.busContent',compact('allItinerario'));     

        }
        return "Error en la busqueda de terminales";
    }
}
