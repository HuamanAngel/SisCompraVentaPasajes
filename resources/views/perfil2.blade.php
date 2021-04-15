@extends('layouts.app')

@section('contenido_js')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection

@section('contenido_cSS')
<link href="{{ asset('css/perfil2.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <div class="main-container">
        <div class="m-4 d-flex">
            <div id="sidebar-container" class="bg-primary">
                <div class="logo">
                    <h4 class="text-light font-weight-bold">Busvid 19</h4>
                </div>
                <div class="menu">
                    <a href="#" class="d-block text-light p-3"><ion-icon name="person" class="mr-2 lead"></ion-icon>Mis Datos</a>
                    <a href="#" class="d-block text-light p-3"><ion-icon name="clipboard" class="mr-2 lead"></ion-icon>Mis pasajes</a>
                    {{-- <a href="#" class="d-block text-light p-3"><ion-icon name="construct" class="mr-2 lead"></ion-icon>configuracion</a> --}}
                </div>
            </div> 
            <div class="w-100">
                {{-- <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="img/persona4.jpg" class="img-fluid rounded-circle mr-2 avatar">    
                                Usuario
                                 </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                             </li>
                        </ul>
                     </div>
                </nav> --}}



                <div class="container">
                    <div class="row gutters">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <form action="{{ route('perfilEditNow') }}" method="POST">
                                <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h4 class="mb-2 text-primary">Datos Personales</h4>
                                </div>
                                    @csrf
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Usuario</label>
                                            <input type="text" class="form-control" name="usuario" disabled value="{{ Auth::user()->user }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Nombre</label>
                                            <input type="text" class="form-control" name="name" value="{{ Auth::user()->use_name }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="fullName">Apellidos</label>
                                            <input type="text" class="form-control" name="lastname" value="{{ Auth::user()->use_apellido }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>


                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="eMail">Email</label>
                                            <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Telefono</label>
                                            <input type="number" class="form-control" name="telefono" value="{{ Auth::user()->use_tel }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>



                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">Genero</label>
                                            <input type="text" class="form-control" name="genero" disabled value="{{ Auth::user()->use_sexo }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone">DNI</label>
                                            <input type="text" class="form-control" name="dni" disabled value="{{ Auth::user()->use_dni }}" id="fullName" placeholder="Enter full name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            {{-- <button type="button" id="submit" name="submit" class="btn btn-secondary">Cancel</button> --}}
                                            <button type="submit" id="submit" name="submit" class="btn btn-primary">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

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



</body>
@endsection

@section('contenido_abajo_js')
    

@if (session('updateSuccess'))
    <script>
        Swal.fire({
            title: "Categoria fue actualizado correctamente",
            text:  "{{session('updateSuccess')}}",
            icon: "success"
        });
    </script>
@endif
@endsection