@if($allItinerario->count()>0 && $allItinerario->count()!=null)

@foreach ($allItinerario as $Itinerario)


<div>
    <li id="" class="row-caja caja-fondo">
        <div class="row row-one p-cos-10 col-md-12">

            @php
                setlocale(LC_ALL,"es_ES"); 
                \Carbon\Carbon::setLocale('es');
                $dateOut = $Itinerario->iti_salida;
                $dateOut = $dateOut->toTimeString();
                $dateOutN = $Itinerario->iti_salida;
                $dateOutN = $dateOutN->toDateString();
            @endphp

            <div class="fl col p-right-10 w-10">
                <span class="m-right-20 d-flex justify-content-center" style="font-size:20px;">{{ $dateOut }}</span> 
               <span class="d-flex justify-content-center" style="font-size:12px; ">{{ $dateOutN }}</span> 
               <span class="d-flex justify-content-center" style="font-size:12px; ">{{ $Itinerario->iti_terminal_origen }}</span> 
             </div>

            <div class="fl col p-right-10 w-10  d-flex justify-content-center">
                <div>

                @if($Itinerario->iti_isAvailable == 1)
                    <label for="" class="badge badge-success">Disponible</label>
                @else                    
                    <label for="" class="badge badge-danger">No disponible</label>
                @endif
            </div>

            </div>
            <div class="fl col p-right-10 w-10  d-flex justify-content-center">
                <h5 class="text-center">
                    {{ $Itinerario->iti_terminal_llegada }}
                </h5>
            </div>
            <div class="fl col p-right-10 w-10  d-flex justify-content-center">{{ $Itinerario->iti_service }}</div>
            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">S/{{ $Itinerario->iti_price }}</div>
            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">{{ $Itinerario->iti_quantitySeat }}</div>
        </div>
        <div class="m-top-20 d-flex justify-content-end col-md-12">
            <button class="btn btn-1 btn-3">VER ASIENTOS DISPONIBLES</button>
        </div>
    </li>
</div>                      
@endforeach

    
@else
<h3 class="text-center">No se encontraron resultados</h3>

@endif


