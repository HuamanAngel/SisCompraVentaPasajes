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
        <div class="m-top-20 d-flex justify-content-end col-md-12">
            <button class="btn btn-1 btn-3" type="button" data-toggle="modal" data-target='#modal1'>Pagar</button>
        </div>
        <div class="modal" tabindex="-1" id='modal1'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        Realizar Pago
                    </div>
                    <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm">
                                        <form class="form-horizontal" method="post">
                                            <fieldset>

                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card"></i></span>
                                                    <div class="col-md-8">
                                                        <input id="fname" name="name" type="text" placeholder="Ingresa el numero de la tarjera" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar"></i></span>
                                                    <div class="col-md-8">
                                                        <input id="lname" name="name" type="text" placeholder="Mes de expiración" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar"></i></span>
                                                    <div class="col-md-8">
                                                        <input id="email" name="email" type="text" placeholder="Año de expiración" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card"></i></span>
                                                    <div class="col-md-8">
                                                        <input id="phone" name="phone" type="text" placeholder="Nombre de la tarjeta" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-1 btn-3">Efectuar Pago</button>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-dismiss='modal'>cerrar</button>

                    </div>
                </div>

            </div>
        </div>
    </li>
</div>
@endforeach


@else
<h3 class="text-center">No se encontraron resultados</h3>

@endif


