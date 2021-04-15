<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registro Clientes</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="VendorClientes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="VendorClientes/icofont/icofont.min.css" rel="stylesheet">
  <link href="VendorClientes/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/styleClientes.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="https://thumbs.dreamstime.com/b/retrato-masculino-del-icono-del-perfil-del-hombre-de-negocios-plano-47075259.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">Administrador</a></h1>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#"><i class="bx bx-user"></i> <span>Registrar Clientes</span></a></li>
          <li ><a href="ModificarCliente"><i class="bx bx-file-blank"></i> <span>Modificar Clientes</span></a></li>
          <li><a href="EliminarCliente"><i class="bx bx-server"></i> Eliminar Clientes</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Registro Clientes Section ======= -->
    <section id="registerClients" class="registro">
        <div class="container">
          <div class="section-title">
            <h2>Registrar Cliente</h2>
          </div>
  
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
                    <div class="text-center col-md-6"><button  type="submit">Guardar Registro</button></div>
                    
                </div>
              </form>
            </div>
          </div>
  
        </div>
      </section><!-- End Registro Clientes -->
  </main><!-- End #main -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="VendorClientes/jquery/jquery.min.js"></script>
  <script src="VendorClientes/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  

  <!-- Template Main JS File -->
  <script src="js/funcClientes.js"></script>

  <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>

</html>