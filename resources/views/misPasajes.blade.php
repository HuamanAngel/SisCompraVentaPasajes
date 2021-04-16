@extends('layouts.app')

@section('contenido_js')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection

@section('contenido_cSS')
<link href="{{ asset('css/perfil2.css') }}" rel="stylesheet">



@endsection

@section('content')


    <div class="main-container">
        <div class="m-4 d-flex">
            <div id="sidebar-container" class="bg-primary">



                <div class="logo">
                    <h4 class="text-light font-weight-bold text-center">Busvid19</h4>
                </div>
                <div class="menu" >

                    <hr style="border-color: white">
                    <a href="{{ route('perfilUserNow') }}" class="d-block text-light p-3"><ion-icon name="person" class="mr-2 lead"></ion-icon>Mis Datos</a>
                    <hr style="border-color: white">
                    <a href="{{ route('misPasajes') }}" class="d-block text-light p-3 active"><ion-icon name="clipboard" class="mr-2 lead"></ion-icon>Mis pasajes</a>
                    <hr style="border-color: white">
                    {{-- <a href="#" class="d-block text-light p-3"><ion-icon name="construct" class="mr-2 lead"></ion-icon>configuracion</a> --}}
                </div>
            </div> 
            <div class="w-100">
                <div class="container">
                    <div class="row gutters">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">



                            <table class="table table-responsive">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">Origen</th>
                                    <th scope="col">Destino</th>
                                    <th scope="col">Fecha de ida</th>
                                    <th scope="col">N° de asiento</th>
                                    <th scope="col">DNI</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">Accion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach(Auth::user()->userCompra as $compra)
                                        <tr>
                                            <td>{{ $compra->compraPasaje->pasIti->iti_terminal_origen }}</td>
                                            <td>{{ $compra->compraPasaje->pasIti->iti_terminal_llegada }}</td>
                                            <td>{{ $compra->compraPasaje->pasIti->iti_salida }}</td>
                                            <td>{{ $compra->compraPasaje->pas_numero_asiento }}</td>
                                            <td>{{ Auth::user()->use_dni }}</td>
                                            <td>{{ $compra->com_monto_compra }}</td>
                                            <td><i class="fa fa-download" aria-hidden="true"></i></td>
                                        </tr>    
                                    @endforeach
                                </tbody>
                              </table>


                        </div>
                    </div>
                    </div>
                    </div>
                    </div>




                {{-- <div id=content>
                    <section class="py-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-9" >
                                <h1 class="font-weight-bold mb-0">Bienvenido  Usuario</h1>
                                <p class="lead text-muted">Revisa la ultima información</p>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <button class="btn btn-primary w-100 align-self-center">Descargar reporte</button>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section class="py-3">
                            <div class="span5">
                                            <table class="table table-striped table-condensed">
                                                <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Date registered</th>
                                                    <th>Role</th>
                                                    <th>Status</th>                                          
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                <tr>
                                                    <td>Donna R. Folse</td>
                                                    <td>2012/05/06</td>
                                                    <td>Editor</td>
                                                    <td><span class="label label-success">Active</span>
                                                    </td>                                       
                                                </tr>
                                                <tr>
                                                    <td>Emily F. Burns</td>
                                                    <td>2011/12/01</td>
                                                    <td>Staff</td>
                                                    <td><span class="label label-important">Banned</span></td>                                       
                                                </tr>
                                                <tr>
                                                    <td>Andrew A. Stout</td>
                                                    <td>2010/08/21</td>
                                                    <td>User</td>
                                                    <td><span class="label">Inactive</span></td>                                        
                                                </tr>
                                                <tr>
                                                    <td>Mary M. Bryan</td>
                                                    <td>2009/04/11</td>
                                                    <td>Editor</td>
                                                    <td><span class="label label-warning">Pending</span></td>                                       
                                                </tr>
                                                <tr>
                                                    <td>Mary A. Lewis</td>
                                                    <td>2007/02/01</td>
                                                    <td>Staff</td>
                                                    <td><span class="label label-success">Active</span></td>                                        
                                                </tr>                                   
                                            </tbody>
                                            </table>
                                </div>
                                  
                    </section>
                    
                </div> --}}
                    
            </div>

            
        </div>

    </div>

@endsection

@section('contenido_abajo_js')
    

@if (session('updateSuccess'))
    <script>
        Swal.fire({
            title: "Los datos fueron actualizados correctamente",
            text:  "{{session('updateSuccess')}}",
            icon: "success"
        });
    </script>
@endif
@endsection