@extends('layouts.appAdmin')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('VendorClientes/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/styleClientes.css') }} " rel="stylesheet">

@endsection


@section('content')

<main id="main">
  <!-- ======= Modificar Section ======= -->
  <section id="modificar" class="registro">
      <div class="container">
  
        <div class="section-title">
          <h2>Modificar Cliente</h2>
        </div>
        <div class="row m-2">
            <div class=" col-md-2">
                <p>Ingresar el DNI</p>
            </div>
            <div class="input-group  col-md-3">
              <input type="text" class="form-control">
              <div class="">
                  <button class="btn btn-danger" type="button" id=""><i class="fas fa-search"></i></button>
              </div>
          </div>
        </div>
        <div class="row" >
            <div class="col-lg-11 align-items-stretch">
              <form action="" method="post" role="form" class="registro-form">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">DNI</th>
                      <th scope="col">Apellidos</th>
                      <th scope="col">Nombres</th>
                      <th scope="col">Sexo</th>
                      <th scope="col">Edad</th>
                      <th scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">78787845</th>
                      <td>Palomino Galvez</td>
                      <td>Farik</td>
                      <td>M</td>
                      <td>20</td>
                      <td><button class="m-0" type="submit">Editar</button></td>
                    </tr>
                    <tr>
                      <th scope="row">78787845</th>
                      <td>Palomino Galvez</td>
                      <td>Farik</td>
                      <td>M</td>
                      <td>20</td>
                      <td><button class="m-0" type="submit">Editar</button></td>
                    </tr>
                    <tr>
                      <th scope="row">78787845</th>
                      <td>Palomino Galvez</td>
                      <td>Farik</td>
                      <td>M</td>
                      <td>20</td>
                      <td><button class="m-0" type="submit">Editar</button></td>
                    </tr>
                    <tr>
                      <th scope="row">78787845</th>
                      <td>Palomino Galvez</td>
                      <td>Farik</td>
                      <td>M</td>
                      <td>20</td>
                      <td><button class="m-0" type="submit">Editar</button></td>
                    </tr>
                    <tr>
                      <th scope="row">78787845</th>
                      <td>Palomino Galvez</td>
                      <td>Farik</td>
                      <td>M</td>
                      <td>20</td>
                      <td><button class="m-0" type="submit">Editar</button></td>
                    </tr>
                    <tr>
                      <th scope="row">78787845</th>
                      <td>Palomino Galvez</td>
                      <td>Farik</td>
                      <td>M</td>
                      <td>20</td>
                      <td><button class="m-0" type="submit">Editar</button></td>
                    </tr>
                    
                  </tbody>
                </table>
                 
              <div class="row mt-5 mt-lg-0 mt-5">
                <div class="text-center col-md-6 btn-red"><button type="submit">Cancelar</button></div>
                <div class="text-center col-md-6"><button  type="submit">Actualizar Registro</button></div>
              </div>  
            </div>
              <!--<hr></br></br></br></br>
              <div class="">
                <h2>Actualizar Datos</h2>
              </div><hr>
              <div class="row" >
              <div class="col-lg-11 align-items-stretch">
                <form action="" method="post" role="form" class="registro-form">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Nombres</label>
                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Apellidos</label>
                      <input type="text" name="lastName" class="form-control" id="lastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">DNI</label>
                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                      <label for="name">Sexo</label>
                      <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                  </div>
                  <div class="form-group">
                      <label for="name">Edad</label>
                      <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validate"></div>
                  </div>
                  <div class="row mt-5 mt-lg-0 mt-5">
                      <div class="text-center col-md-6 btn-red"><button type="submit">Cancelar</button></div>
                      <div class="text-center col-md-6"><button  type="submit">Modificar Registro</button></div>
                      
                  </div>
                </form>
              </div>
            </div>-->
             
          </div>
      </div>
    </section><!-- End Modificar Section -->
    </main><!-- End #main -->
@endsection

@section('contenido_abajo_js')
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>

<!-- Vendor JS Files -->

<!-- Template Main JS File -->
<script src="{{ asset('js/funcClientes.js') }} "></script>

@endsection