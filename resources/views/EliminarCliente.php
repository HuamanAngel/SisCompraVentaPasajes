<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Eliminar Registro</title>
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
          <li ><a href="RegistrarCliente"><i class="bx bx-user"></i> <span>Registrar Clientes</span></a></li>
          <li><a href="ModificarCliente"><i class="bx bx-file-blank"></i> <span>Modificar Clientes</span></a></li>
          <li class="active"><a href="#"><i class="bx bx-server"></i> Eliminar Clientes</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <!-- ======= Eliminar Section ======= -->
    <section id="eliminar" class="registro">
      <div class="container">

        <div class="section-title">
          <h2>Eliminar Cliente</h2>
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
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">78787845</th>
                    <td>Palomino Galvez</td>
                    <td>Farik</td>
                    <td>M</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <th scope="row">78787845</th>
                    <td>Palomino Galvez</td>
                    <td>Farik</td>
                    <td>M</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <th scope="row">78787845</th>
                    <td>Palomino Galvez</td>
                    <td>Farik</td>
                    <td>M</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <th scope="row">78787845</th>
                    <td>Palomino Galvez</td>
                    <td>Farik</td>
                    <td>M</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <th scope="row">78787845</th>
                    <td>Palomino Galvez</td>
                    <td>Farik</td>
                    <td>M</td>
                    <td>20</td>
                  </tr>
                  <tr>
                    <th scope="row">78787845</th>
                    <td>Palomino Galvez</td>
                    <td>Farik</td>
                    <td>M</td>
                    <td>20</td>
                  </tr>
                </tbody>
              </table>
              
            <div class="row mt-5 mt-lg-0 mt-5">
              <div class="text-center col-md-6 btn-red"><button type="submit">Cancelar</button></div>
              <div class="text-center col-md-6"><button  type="submit">Eliminar Registro</button></div>
            </div>  
          </div>
        </div>
    </div>
    </section><!-- End Eliminar Section -->
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