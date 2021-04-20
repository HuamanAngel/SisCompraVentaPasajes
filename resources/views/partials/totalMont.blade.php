
<div class="cardContainer1 shadow">
    <form action="{{ route('paymentMethod') }}" method="POST">
        @csrf
        <div class="p-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Salida</h4>
            <h4 style="font-weight: bold">Llegada</h4>
        </div>

        <div class="pl-3 pr-3 d-flex justify-content-between">
            <label for="">{{ $dataBus->iti_terminal_origen }}</label>
            <label for="">{{ $dataBus->iti_terminal_llegada }}</label>
        </div>
        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">N° de asiento: </h4>
            <h4 style="font-weight: bold" class="class-asiento-select" data-asiento-select="0"> - - -</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Costo Base: </h4>
            <h4 style="font-weight: bold" class="class-base-select" data-base="{{ $dataBus->iti_price }}" >S/{{ $dataBus->iti_price }}</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Por Ubicacion: </h4>
            <h4 style="font-weight: bold" class="class-ubicacion-select" data-ubicacion="0"> - - -</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <div class="pl-3 pr-3 d-flex justify-content-between">
            <h4 style="font-weight: bold">Costo Total: </h4>
            <h4 style="font-weight: bold" class="class-total-select" data-total="0"> - - -</h4>
        </div>

        <div class="pl-3 pr-3">
            <hr class="separatorLine">
        </div>
        <input type="hidden" name="id" value="{{ $dataBus->id}}">
        <input type="hidden" name="asiento" class="inputAsiento" value="">
        <input type="hidden" name="costoBase" class="inputPrice" value="{{ $dataBus->iti_price}}">
        <input type="hidden" name="costoUbicacion" class="inputUbicacion" value="">
        <input type="hidden" name="costoTotal" class="inputTotal" value="">
        <div class="pb-2 d-flex justify-content-center">
            <button class="btn btn-info text-white" type="button" style="font-weight: bold" data-toggle="modal" data-target='#modal1'>Comprar Pasaje</button>
        </div>
        <div class="modal" tabindex="-1" id='modal1'>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" >
                        <h4 class="modal-title">Realizar Pago</h4>
                    </div>
                    <div class="modal-body" >

                            <div class="row-md-20" >
                                <div class="col-md-12">
                                    <div class="well well-sm">
                                        <form class="form-horizontal" method="post">
                                            <fieldset>

                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fas fa-envelope"></i></span>
                                                    <div class="col-md-12">
                                                        <input id="fname" name="name" type="number" required placeholder="CVV" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar"></i></span>
                                                    <div class="col-md-12">
                                                        <input id="lname" name="name" type="number" required placeholder="Mes de expiración" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-calendar"></i></span>
                                                    <div class="col-md-12">
                                                        <input id="email" name="email" type="number" required placeholder="Año de expiración" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-credit-card"></i></span>
                                                    <div class="col-md-12">
                                                        <input id="phone" name="phone" type="text" required placeholder="Numero de la Tarjeta" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-md-12 text-center">
                                                        <button type="submit" class="btn btn-success">Efectuar Pago</button>
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
    </form>
</div>
