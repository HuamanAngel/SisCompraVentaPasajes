@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
<link rel="stylesheet" href="{{ asset('css/styleShowAmount.css') }}">
@endsection


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">


            <h4 class="py-4">Piso 1</h4>


            <div class="col-md-6">
                <div class="cardContainer1 shadow">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                        </div>
                    </div>

                </div>
            </div>





            <h4 class="py-4">Piso 2</h4>


            <div class="col-md-12">
                <div class="cardContainer1 shadow">


                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button class="m-2 buttonAmount shadow">36</button>
                            <button class="m-2 buttonAmount shadow">36</button>
                            <button class="m-2 buttonAmount buttonAmountHidden">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount buttonAmountHidden">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>

                        </div>
                    </div>                    




                    <div class="row">
                        <div class="col-md-12 h-50 pt-4"></div>
                    </div>


                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-around">
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>
                            <button class="m-2 buttonAmount">36</button>

                        </div>
                    </div>

                </div>
            </div>




        </div>
        <div class="col-md-4">
            <div class="cardContainer1 shadow">
                <div class="p-3 d-flex justify-content-between">
                    <h4 style="font-weight: bold">Salida</h4>
                    <h4 style="font-weight: bold">Llegada</h4>
                </div>

                <div class="pl-3 pr-3 d-flex justify-content-between">
                    <label for="">La Victoria</label>
                    <label for="">Terminal Terrestre Cusco</label>
                </div>
                <div class="pl-3 pr-3">
                    <hr class="separatorLine">
                </div>
                <div class="pl-3 pr-3 d-flex justify-content-between">
                    <h4 style="font-weight: bold">N° de asiento: </h4>
                    <h4 style="font-weight: bold">34</h4>
                </div>

                <div class="pl-3 pr-3">
                    <hr class="separatorLine">
                </div>
                <div class="pl-3 pr-3 d-flex justify-content-between">
                    <h4 style="font-weight: bold">Costo Total: </h4>
                    <h4 style="font-weight: bold">S/123.00</h4>
                </div>

                <div class="pl-3 pr-3">
                    <hr class="separatorLine">
                </div>
                <div class="pb-2 d-flex justify-content-center">
                    <button class="btn btn-info text-white" style="font-weight: bold">Comprar pasaje</button>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection

@section('contenido_abajo_js')
   
@endsection