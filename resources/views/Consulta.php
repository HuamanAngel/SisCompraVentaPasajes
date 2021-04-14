<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de viajes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/styles.css">
    </head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-bus"></i></a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">

          </ul>
        </div>
      </div>  
    </nav>

    <header class="main-header">
        <div class="background-overlay text-white py-5 " >
            <div class="container padding-t">
                <div class="row" style="margin-bottom: 10px;">
                    <div class="col-md-12 text-center justify-content-center align-seft-center">
                        <h1 style="font-size:50px">Búsqueda de viajes</h1>
                    </div>
                </div>
                <div class="row ">
                    <div class="input-group py-5">
                        <div class="col-md-6 col-sm-12">
                            <select class="w-100 form-control form-control-lg" name="ciudad" id="ciudad" style="height:49.5px;">
                                <option value="" selected>ORIGEN</option>
                                <option value="Lima">Lima (Todos)</option>
                                <option value="Chiclayo">Chiclayo</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Trujillo">Trujillo</option>
                                <option value="Cusco">Cusco</option>
                                <option value="Huancayo">Huancayo</option>
                                <option value="Ica">Ica</option>
                                <option value="Tacna">Tacna</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select class="w-100 form-control form-control-lg" name="ciudad" id="ciudad" style="height:49.5px;">
                                <option value="" selected>DESTINO</option>
                                <option value="Lima">Lima (Todos)</option>
                                <option value="Chiclayo">Chiclayo</option>
                                <option value="Arequipa">Arequipa</option>
                                <option value="Trujillo">Trujillo</option>
                                <option value="Cusco">Cusco</option>
                                <option value="Huancayo">Huancayo</option>
                                <option value="Ica">Ica</option>
                                <option value="Tacna">Tacna</option>
                            </select>
                        </div>
                    </div> 
                </div>
                </br></br>
                <div class="row ">
                    <div class="col-md-12 col-sm-9 d-flex justify-content-end">
                        <a href="verConsulta">
                            <button class="btn btn-danger btn-lg btn-2" type="button" id="button-search" >BUSCAR</button>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </header>


    <!--Bootstrap js-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>