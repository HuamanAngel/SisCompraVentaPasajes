@extends('layouts.app')


@section('contenido_js')
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('contenido_cSS')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   
@endsection


@section('content')


<header class="main-header">
    <div class="background-overlay text-white py-5 " >
        <form action="{{route('result_query')}}" method="post">
                @csrf


            <div class="container padding-t">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12 text-center justify-content-center align-seft-center">
                        <h1 style="font-size:50px">Búsqueda de viajes</h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="input-group py-5">
                        <div class="col-md-6 col-sm-12">
                            <select class="w-100 form-control form-control-lg" name="CiudadOrigen" id="ciudad" style="height:49.5px;">
                                <option value="" selected>ORIGEN</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Ancash">Ancash</option>
                                <option value="Apurímac">Apurímac</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Ayacucho">Ayacucho</option>
                                <option value="Cajamarca">Cajamarca</option>
                                <option value="Cuzco">Cuzco</option>
                                <option value="Huancavelica">Huancavelica</option>
                                <option value="Huánuco">Huánuco</option>
                                <option value="Ica">Ica</option>
                                <option value="Junin">Junin</option>
                                <option value="La Libertad">La Libertad</option>
                                <option value="Lambayeque">Lambayeque</option>
                                <option value="Lima">Lima (Todos)</option>
                                <option value="Loreto">Loreto</option>
                                <option value="Madre de Dios">Madre de Dios</option>
                                <option value="Moquegua">Moquegua</option>
                                <option value="Pasco">Pasco</option>
                                <option value="Piura">Piura</option>
                                <option value="Puno">Puno</option>
                                <option value="San Martin">San Martin</option>
                                <option value="Tacna">Tacna</option>
                                <option value="Tumbes">Tumbes</option>
                                <option value="Ucayali">Ucayali</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select class="w-100 form-control form-control-lg" name="CiudadDestino" id="ciudad" style="height:49.5px;">
                                <option value="" selected>DESTINO</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Ancash">Ancash</option>
                                <option value="Apurimac">Apurimac</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Ayacucho">Ayacucho</option>
                                <option value="Cajamarca">Cajamarca</option>
                                <option value="Cuzco">Cuzco</option>
                                <option value="Huancavelica">Huancavelica</option>
                                <option value="Huánuco">Huánuco</option>
                                <option value="Ica">Ica</option>
                                <option value="Junin">Junin</option>
                                <option value="La Libertad">La Libertad</option>
                                <option value="Lambayeque">Lambayeque</option>
                                <option value="Lima">Lima (Todos)</option>
                                <option value="Loreto">Loreto</option>
                                <option value="Madre de Dios">Madre de Dios</option>
                                <option value="Moquegua">Moquegua</option>
                                <option value="Pasco">Pasco</option>
                                <option value="Piura">Piura</option>
                                <option value="Puno">Puno</option>
                                <option value="San Martin">San Martin</option>
                                <option value="Tacna">Tacna</option>
                                <option value="Tumbes">Tumbes</option>
                                <option value="Ucayali">Ucayali</option>
                            </select>
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="row ">
                    <div class="col-md-12 col-sm-9 d-flex justify-content-end">
                        <a href="verConsulta">
                            <button class="btn btn-danger btn-lg btn-2" type="submit" id="button-search" >BUSCAR</button>
                        </a>
                    </div>
                </div>

            </div>
        </form>
    </div>
</header>

@endsection

@section('contenido_abajo_js')

@endsection