@extends('layouts.app')


@section('contenido_js')
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    
@endsection

@section('contenido_cSS')


<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<style>
    .div-disabled {
        pointer-events: none;
        opacity: 0.4;
    }

</style>

@endsection


@section('content')

{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="busqueda.html"><i class="fas fa-bus"></i></a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">

        </ul>
      </div>
    </div>  
</nav> --}}

<section class="contenedor">
<!--BARRA LATERAL-->
<div id="filter-block" class="filter-sec fl w-22 lateral">
    <div class="container" >
        <br>
        <div class="row ">
            <div class="col-sm-3 col-md-12">
                <h3 >FILTRAR</h3>
            </div>
        </div>
        <hr>
        <div class="row ">
            <div class=" col-sm-3 col-md-12">
                <p>TERMINAL DE SALIDA</p>
            </div>
        </div>
        <div class="row">
            <div class="input-group col-sm-3 col-md-12 terminal-div">
                <input type="text" class="form-control input-terminal" data-terminal="2" placeholder="TERMINAL DE SALIDA" >
                <div class="input-group-append">
                    <button class="btn btn-3 search-button-terminal" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="row ">
            <div class="col-sm-3 col-md-12">
                <p>TERMINAL DE LLEGADA</p>
            </div>
        </div>
        <div class="row">
            <div class="input-group col-sm-3 col-md-12 terminal-div">
                <input type="text" class="form-control input-terminal" data-terminal="1" placeholder="TERMINAL DE LLEGADA" >
                <div class="input-group-append">
                    <button class="btn btn-3 search-button-terminal" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
        <hr>
        {{-- <div class="row ">
            <div class="col-sm-3 col-md-12">
                <p>PRECIOS</p>
            </div>
        </div> --}}
        {{-- <div class="row">
            <div class="col-sm-3 col-md-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="">
                    <label class="form-check-label" for="">
                        De menor a mayor
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="" >
                    <label class="form-check-label" for="">
                        De mayor a menor
                    </label>
                </div>
            </div>
        </div> --}}
        <hr>
        <div class="row ">
            <div class="col-sm-3 col-md-12">
                <p>SERVICIOS</p>
            </div>
        </div>
        <div id="lista-servicios" class="row">
            <div class="col-sm-3 col-md-12">
                <ul class="amenity-list clearfix">
                    <li value="1" class="clearfix fl service-option" data-option-service="0">
                        <span class="f1" title="Todos">Todos</span>
                    </li>
                    <li value="2" class="clearfix fl service-option" data-option-service="1">
                        <span class="f1" title="Wifi">WIFI</span>
                    </li>
                    <li value="3" class="clearfix fl service-option" data-option-service="2">
                        <span class="f1" title="TV">TV</span>
                    </li>
                    <li value="4" class="clearfix fl service-option" data-option-service="3">
                        <span class="f1" title="Baño">Baño</span>
                    </li>
                    <li value="5" class="clearfix fl service-option" data-option-service="4">
                        <span class="f1" title="Ninguno">Ninguno</span>
                    </li>
                </ul>
            </div>
        </div>
        </br></br>
    </div>
</div>
<!--RESULTADOS-->
<div class="sort-results fl w-75 fl m-left">
    <div class="sort-sec clearfix py-4" style="background: rgb(1, 1, 2);">
        <div class="w-15 fl col f-12 d-color right-10 d-flex justify-content-center field-name" data-filter-price="2" data-filter-direction="1" style="cursor: pointer">
            <div class="pl-0">
                Salida
                <i class="fa fa-filter filter-direction-now"></i>
            </div>
        </div>
        <div class="w-15 fl col f-12 d-color d-flex justify-content-center field-name" style="cursor: pointer" data-filter-price="3" data-filter-direction="1">
            <div class="pl-0">
                Disponible
                <i class="fa fa-filter filter-direction-now"></i>
            </div>
        </div>
        <div class="w-17 fl col f-12 d-color d-flex justify-content-center">Terminal de LLegada</div>

        <div class="w-15 fl col f-12 d-color right-20 d-flex justify-content-center">Servicios</div>

        <div class="w-17 fl col-2 f-12 d-color  d-flex justify-content-center field-name" style="cursor: pointer" data-filter-price="1" data-filter-direction="1">
            <div class="pl-0">
                Precio
                <i class="fa fa-filter filter-direction-now"></i>
            </div>
        </div>
        
        
        <div class="w-20 fl col-2 f-12 d-color  d-flex justify-content-center field-name" style="cursor: pointer" data-filter-price="4" data-filter-direction="1">
            <div class="pl-0">
                Asientos disponibles
                <i class="fa fa-filter filter-direction-now"></i>

            </div>
        </div>
    </div>
    
    <div class="results-section">
        <ul class="bus-items" id="content-central-allbus">
            <!-- UN COMPONENTE BUS-->
            @include('partials/busContent')
        </ul>
    </div>
    <br><br>
</div>


<div class="getAllDirection" style="display: none">
        @if($allItinerario!=null && $allItinerario->count()>0)
            <input type="hidden" class="valueOrigin" name="originDepa" type="text" value="{{ $allItinerario[0]->iti_depa_origen }}">
            <input type="hidden" class="valueDestino" name="destinoDepa" type="text" value="{{ $allItinerario[0]->iti_depa_llegada }}">
        @else
            <input type="hidden" class="valueOrigin" name="originDepa" type="text" value="">
            <input type="hidden" class="valueDestino" name="destinoDepa" type="text" value="">
        
        @endif
</div>

</section>
<!--Bootstrap js-->

@endsection

@section('contenido_abajo_js')
    {{-- Ajax solo para filtro --}}
<script>
    let valueService = -1;
    let valueOriginDepa =  $('.getAllDirection').find('.valueOrigin').val();
    let valueDestinoDepa = $('.getAllDirection').find('.valueDestino').val();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') //Obtiene el token 										csrf
        }
    });
    $(document).ready(function(){
        $(document).on('click','.field-name',function(event){

            let icon = $(this).find('.filter-direction-now');
            let valueOption = $(this).attr('data-filter-price');
            let valueFilter = $(this).attr('data-filter-direction');
            if($(this).attr('data-filter-direction')=='1'){
                icon.toggleClass('fa-arrow-up');
                $(this).attr('data-filter-direction',2);
            }else if($(this).attr('data-filter-direction')=='2'){
                icon.toggleClass('fa-arrow-down');
                $(this).attr('data-filter-direction',1);
            }
            $.ajax({
                url: "/fetch-price",
                method:"GET",
                data:{'optionFilter':valueOption,'directionFilter':valueFilter,'valueService':valueService,'CiudadOrigen':valueOriginDepa,'CiudadDestino':valueDestinoDepa},
                success: function(data) {
                    $("#content-central-allbus").html(data);
                    $("#content-central-allbus").removeClass('div-disabled');

                },
                beforeSend: function(thisXHR) {
                    $("#content-central-allbus").addClass('div-disabled');
                },
                statusCode: {
                    404: function() {
                        alert("Error en la paginacion");
                    }
                },
                error: function(jqXHR, status, error) {
                    alert("Error al cargar tabla de productos");
                }
            });
        });
    });
    </script>

{{-- Ajax para servicios --}}
    <script>
        $(document).ready(function(){
            $(document).on('click','.service-option',function(event){
                let valueOption = $(this).attr('data-option-service');
                valueService = valueOption; 
                $.ajax({
                    url: "/fetch-service",
                    method:"GET",
                    data:{'optionFilterService':valueOption,'CiudadOrigen':valueOriginDepa,'CiudadDestino':valueDestinoDepa},
                    success: function(data) {
                        $("#content-central-allbus").html(data);
                        $("#content-central-allbus").removeClass('div-disabled');

                    },
                    beforeSend: function(thisXHR) {
                        $("#content-central-allbus").addClass('div-disabled');
                    },
                    statusCode: {
                        404: function() {
                            alert("Error en la paginacion");
                        }
                    },
                    error: function(jqXHR, status, error) {
                        alert("Error al cargar tabla de productos");
                    }
                });
            });
        });
    </script>
    {{-- Buscador de terminal de llegada y salida --}}
    <script>



        $(document).ready(function(){

            $(document).on('click','.search-button-terminal',function(event){
                let valueTerminal = $(this).closest('.terminal-div').find('.input-terminal').attr('data-terminal');
                let nameTerminal = $(this).closest('.terminal-div').find('.input-terminal').val();
                $.ajax({
                url: "/fetch-result-terminal",
                method:"GET",
                data:{'optionFilter':valueTerminal,'nameFilter':nameTerminal,'valueService':valueService,'CiudadOrigen':valueOriginDepa,'CiudadDestino':valueDestinoDepa},
                success: function(data) {
                    $("#content-central-allbus").html(data);
                    $("#content-central-allbus").removeClass('div-disabled');
                },
                beforeSend: function(thisXHR) {
                    $("#content-central-allbus").addClass('div-disabled');
                },
                statusCode: {
                    404: function() {
                        alert("Error en la paginacion");
                    }
                },
                error: function(jqXHR, status, error) {
                    alert("Error al cargar tabla de productos");
                }
            });




            });
        });
    </script>
@endsection




