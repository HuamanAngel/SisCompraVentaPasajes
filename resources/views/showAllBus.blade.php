@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
<style>
    .div-disabled {
        pointer-events: none;
        opacity: 0.4;
    }

</style>

@endsection


@section('content')


<div class="container-fluid">
    <h1 class="mt-4">Promociones Actuales</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Promociones Actuales</li>
    </ol>
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 ">
            <h4>Servicios</h4>
            <div class="row p-2 m-1">
                <div class="mb-2 btn btn-primary col-md-12 col-6 service-option" data-option-service="0">
                    Todos
                </div>
                <div class="mb-2 btn btn-primary col-md-12 col-6 service-option" data-option-service="1">
                    WIFI
                </div>
                <div class="mb-2 btn btn-primary col-md-12 col-sm-12 col-6 service-option" data-option-service="2">
                    TV
                </div>
                <div class="mb-2 btn btn-primary col-md-12 col-6 service-option" data-option-service="3">
                    Baño
                </div>
                <div class="mb-2 btn btn-primary col-md-12 col-6 service-option" data-option-service="4">
                    Ninguno
                </div>

            </div>
            <h4>Terminales de llegada</h4>
            <div class="row p-2 m-1">
                <div class="mb-2 btn btn-primary col-md-12 col-12 terminal-div">
                    <input type="text" class="input-terminal" data-terminal="1" placeholder="Terminal de llegada" name="searchTerminalExit"><button class="search-button-terminal"><i class="fa fa-search"></i></button>
                </div>
            </div>
            <h4>Terminales de salida</h4>
            <div class="row p-2 m-1">
                <div class="mb-2 btn btn-primary col-md-12 col-12 terminal-div" >
                    <input type="text" class="input-terminal" data-terminal="2" placeholder="Terminal de salida" name="searchTerminalEntry"><button class="search-button-terminal"><i class="fa fa-search"></i></button>
                </div>
            </div>

        </div>
        <div class="col-lg-10 col-md-10 col-sm-10">
            <div class="d-flex justify-content-end">
                {{-- <select name="FilterSelect" id="">
                    <option value="">Mayor Precio</option>
                    <option value="">Mayor Precio</option>
                    <option value="">Mayor Precio</option>
                    <option value="">Mayor Precio</option>
                    <option value="">Mayor Precio</option>
                </select> --}}
            </div>
            <div class="table-responsive">
            <table class="table">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th style="cursor: pointer" class="bg-white field-name" data-filter-price="2" data-filter-direction="1">
                            <div class="pl-0">
                                Salida
                                <i class="fa fa-filter filter-direction-now"></i>
                            </div>
                        </th>
                        <th style="cursor: pointer" class="bg-white field-name" data-filter-price="3" data-filter-direction="1">
                            <div class="pl-0">
                                Disponible
                                <i class="fa fa-filter filter-direction-now"></i>
                            </div>
                        </th>
                        <th style="cursor: pointer" class="bg-white field-name" data-filter-price="1" data-filter-direction="1">
                            <div class="pl-0">
                                Precio
                                <i class="fa fa-filter filter-direction-now"></i>
                            </div>
                        </th>
                        <th>Servicios</th>
                        <th style="cursor: pointer" class="bg-white field-name" data-filter-price="4" data-filter-direction="1">
                            <div class="pl-0">
                                Asientos disponibles
                                <i class="fa fa-filter filter-direction-now"></i>

                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody id="content-central-allbus">
                    @include('partials/busContent')
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{-- {{ $products->links() }} --}}

            </div>
            </div>



        </div>
        
    </div>
</div>

@endsection

@section('contenido_abajo_js')
{{-- Ajax solo para filtro --}}
<script>
    let valueService = -1;
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
                data:{'optionFilter':valueOption,'directionFilter':valueFilter,'valueService':valueService},
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
                    data:{'optionFilterService':valueOption},
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
                data:{'optionFilter':valueTerminal,'nameFilter':nameTerminal,'valueService':valueService},
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


            // <div class="row p-2 m-1">
            //     <div class="mb-2 btn btn-primary col-md-12 col-12 terminal-div">
            //         <input type="text" class="input-terminal " data-terminal="1" placeholder="Terminal de llegada" name="searchTerminalExit"><button class="search-button-terminal"><i class="fa fa-search"></i></button>
            //     </div>
            // </div>

            // <div class="row p-2 m-1">
            //     <div class="mb-2 btn btn-primary col-md-12 col-12 terminal-div" >
            //         <input type="text" class="input-terminal" data-terminal="2" placeholder="Terminal de salida" name="searchTerminalEntry"><button class="search-button-terminal"><i class="fa fa-search"></i></button>
            //     </div>
            // </div>








    </script>
@endsection