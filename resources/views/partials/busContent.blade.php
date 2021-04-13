@foreach ($allItinerario as $Itinerario)
<tr>
    {{-- <td class="text-center"></td> --}}
    <td>Luisito rey</td>
    <td>
        @php
            setlocale(LC_ALL,"es_ES"); 
            \Carbon\Carbon::setLocale('es');
            $dateOut = $Itinerario->iti_salida;
            $dateOut = $dateOut->toTimeString();
            $dateOutN = $Itinerario->iti_salida;
            $dateOutN = $dateOutN->toDateString();
        @endphp

        <h4>{{ $dateOut }}</h4>
        <label for="" class="text-muted">{{ $dateOutN }}</label> 
    </td>
    <td>{{ $Itinerario->iti_isAvailable }}</td>
    <td>{{ $Itinerario->iti_price }}</td>
    <td>{{ $Itinerario->iti_service }}</td>
    <td>{{ $Itinerario->iti_quantitySeat }}</td>
</tr>                        
@endforeach
