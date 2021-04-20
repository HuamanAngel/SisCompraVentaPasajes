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
    <!-- ======= Registro Clientes Section ======= -->
    <section id="registerClients" class="registro">
        <div class="container">
          <div class="section-title">
            <h2>Registrar Cliente</h2>
          </div>
  
          <div class="row" >
            <div class="col-lg-11 align-items-stretch">
 
              <form action="{{ route('userAdminClient.store') }}" method="post" role="form" class="registro-form">
                @csrf
                <label class="text-danger" for="">* Todos los campos son obligatorios</label>
                <ul>
                    @foreach ($errors->clientRegisterForm->all() as $errorEdit)
                        <li>{{ $errorEdit }}</li>
                    @endforeach               
                </ul>
  
                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="name">Nombres(*)</label>
                    <input type="text" required name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Apellidos(*)</label>
                    <input type="text" required name="lastName" class="form-control" id="lastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="name">DNI(*)</label>
                    <input type="number" required name="dni" class="form-control" id="lastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>


                  <div class="form-group col-md-6">
                    <label for="name">Telefono(*)</label>
                    <input type="number" required name="tel" class="form-control" id="lastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Sexo(*)</label>
                  <div class="maxl">
                      <label class="radio inline"> 
                          <input type="radio" name="gender" value="Masculino" checked>
                          <span> Masculino </span> 
                      </label>
                      <label class="radio inline"> 
                          <input type="radio" name="gender" value="Femenino">
                          <span>Femenino </span> 
                      </label>
                      <label class="radio inline"> 
                          <input type="radio" name="gender" value="No Especificado">
                          <span>No deseo contestar </span> 
                      </label>
                  </div>
              </div>

                <div class="p-2"><label style="font-weight: bold" class="h4" for="">Cuenta online</label><label class="text-danger" for="">&nbsp;(Alternativo) </label> </div>
                <h6 class="text-info">* En caso de querer abrir cuenta online rellenar los campos</h6>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Email</label>
                    <input type="email" name="email" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Usuario</label>
                    <input type="text" name="user" class="form-control" id="lastName" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                </div>



                <div class="row mt-5 mt-lg-0 mt-5">
                    <div class="text-center col-md-6 btn-red"><button class="btn btn-danger" type="submit">Cancelar</button></div>
                    <div class="text-center col-md-6"><button class="btn btn-success"  type="submit">Guardar Registro</button></div>
                    
                </div>
              </form>
            </div>
          </div>
  
        </div>
      </section><!-- End Registro Clientes -->
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->


  <!-- Template Main JS File -->
  <script src="{{ asset('js/funcClientes.js') }}"></script>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>


@endsection

@section('contenido_abajo_js')


@if (session('registerFailed'))
    <script>
        Swal.fire({
            title: "No se pudo actualizar",
            html:  `
            {{session('registerFailed')}}
            <br>
            <ul>
                @foreach ($errors->clientRegisterForm->all() as $errorEdit)
                    <li>{{ $errorEdit }}</li>
                @endforeach               
            </ul>`,
            icon: "error"
        });
    </script>
@endif




@if (session('registerSuccess'))
    <script>
        Swal.fire({
            title: "Cliente creado correctamente",
            text:  "{{session('registerSuccess')}}",
            icon: "success"
        });
    </script>
@endif


@endsection


