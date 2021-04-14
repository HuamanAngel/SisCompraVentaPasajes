@extends('layouts.app')

@section('contenido_js')
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
@endsection

@section('contenido_cSS')
<link href="{{ asset('css/perfil2.css') }}" rel="stylesheet">
@endsection

@section('content')

<body>
    <div class="container main-container">
        <div class="d-flex">
            <div id="sidebar-container" class=bg-primary>
                <div class="logo">
                    <h4 class="text-light font-weight-bold">Busvid 19</h4>
                </div>
                <div class="menu">
                    <a href="#" class="d-block text-light p-3"><ion-icon name="person" class="mr-2 lead"></ion-icon>Perfil</a>
                    <a href="#" class="d-block text-light p-3"><ion-icon name="clipboard" class="mr-2 lead"></ion-icon>Historial</a>
                    <a href="#" class="d-block text-light p-3"><ion-icon name="construct" class="mr-2 lead"></ion-icon>configuracion</a>
                </div>
            </div> 
            <div class="w-100">
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
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
                </nav>

                <div id=content>
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
                    
                </div>
                    
            </div>

            
        </div>

    </div>



</body>
@endsection