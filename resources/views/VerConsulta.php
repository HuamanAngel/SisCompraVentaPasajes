<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itinerarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="busqueda.html"><i class="fas fa-bus"></i></a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
  
            </ul>
          </div>
        </div>  
    </nav>

<section class="contenedor">
    <!--BARRA LATERAL-->
    <div id="filter-block" class="filter-sec fl w-22 lateral">
        <div class="container" >
            </br>
            <div class="row ">
                <div class="col-sm-3 col-md-12">
                    <h3 >FILTRAR</h3>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class=" col-sm-3 col-md-12">
                    <p>TERMINAL DE SALIDA</p>
                </div>
            </div>
            <div class="row">
                <div class="input-group col-sm-3 col-md-12">
                    <input type="text" class="form-control" placeholder="TERMINAL DE SALIDA" >
                    <div class="input-group-append">
                        <button class="btn btn-3" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <hr>
            
            <div class="row ">
                <div class="col-sm-3 col-md-12">
                    <p>TERMINAL DE LLEGADA</p>
                </div>
            </div>
            <div class="row">
                <div class="input-group col-sm-3 col-md-12">
                    <input type="text" class="form-control" placeholder="TERMINAL DE LLEGADA" >
                    <div class="input-group-append">
                        <button class="btn btn-3" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-sm-3 col-md-12">
                    <p>PRECIOS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 col-md-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="">
                        <label class="form-check-label" for="">
                            De menor a mayor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="" >
                        <label class="form-check-label" for="">
                            De mayor a menor
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row ">
                <div class="col-sm-3 col-md-12">
                    <p>SERVICIOS</p>
                </div>
            </div>
            <div id="lista-servicios" class="row">
                <div class="col-sm-3 col-md-12">
                    <ul class="amenity-list clearfix">
                        <li value="1" class="clearfix fl">
                            <span class="f1" title="Todos">Todos</span>
                        </li>
                        <li value="2" class="clearfix fl">
                            <span class="f1" title="Wifi">WIFI</span>
                        </li>
                        <li value="3" class="clearfix fl">
                            <span class="f1" title="TV">TV</span>
                        </li>
                        <li value="4" class="clearfix fl">
                            <span class="f1" title="Baño">Baño</span>
                        </li>
                        <li value="5" class="clearfix fl">
                            <span class="f1" title="Ninguno">Ninguno</span>
                        </li>
                    </ul>
                </div>
            </div>
            </br></br>
        </div>
    </div>
    <!--RESULTADOS-->
    <div class="sort-results fl w-75 fl m-left">
        <div class="sort-sec clearfix py-4" style="background: rgb(1, 1, 2);">
            <div class="w-15 fl col f-12 d-color right-10 d-flex justify-content-center">Salida</div>
            <div class="w-15 fl col f-12 d-color d-flex justify-content-center">Disponible</div>
            <div class="w-17 fl col f-12 d-color d-flex justify-content-center">LLegada</div>
            <div class="w-15 fl col f-12 d-color right-20 d-flex justify-content-center">Servicios</div>
            <div class="w-17 fl col-2 f-12 d-color  d-flex justify-content-center">Precio</div>
            <div class="w-20 fl col-2 f-12 d-color  d-flex justify-content-center">Asientos </div>
        </div>
        
        <div class="results-section">
            <ul class="bus-items">
                <!-- UN COMPONENTE BUS-->
                <div>
                    <li id="" class="row-caja caja-fondo ">
                        <div class="row row-one p-cos-10 col-md-12">
                            <div class="fl col p-right-10 w-10">
                               <span class="m-right-20 d-flex justify-content-center" style="font-size:20px;">15:30:27</span> 
                               <span class="d-flex justify-content-center" style="font-size:12px; ">14/05/2000</span> 
                            </div>
                            <div class="fl col m-right-20 d-flex justify-content-center">1</div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">07:00</div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">Ninguno</div>
                            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">s/ 70</div>
                            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">30 </div>
                        </div>
                        <div class="m-top-20 d-flex justify-content-end col-md-12">
                            <button class="btn btn-1 btn-3">VER ASIENTOS DISPONIBLES</button>
                        </div>
                    </li>
                </div>
                <div>
                    <li id="" class="row-caja caja-fondo">
                        <div class="row row-one p-cos-10 col-md-12">
                            <div class="fl col p-right-10 w-10 ">
                                <span class="m-right-20 d-flex justify-content-center" style="font-size:20px;">15:30:27</span> 
                               <span class="d-flex justify-content-center" style="font-size:12px; ">14/05/2000</span> 
                            </div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">2</div>
                            <div class="fl col p-right-10 w-10 d-flex justify-content-center" >07:00</div>
                            <div class="fl col p-right-10 w-10 d-flex justify-content-center">WIFI</div>
                            <div class="fl col-2 p-right-10 w-15 d-flex justify-content-center">s/ 70</div>
                            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">30 </div>
                        </div>
                        <div class="m-top-20 d-flex justify-content-end col-md-12">
                            <button class="btn btn-1 btn-3">VER ASIENTOS DISPONIBLES</button>
                        </div>
                    </li>
                </div>
                <div>
                    <li id="" class="row-caja caja-fondo">
                        <div class="row row-one p-cos-10 col-md-12">
                            <div class="fl col p-right-10 w-10 ">
                                <span class="m-right-20 d-flex justify-content-center" style="font-size:20px;">15:30:27</span> 
                               <span class="d-flex justify-content-center" style="font-size:12px; ">14/05/2000</span> 
                             </div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">1</div>
                            <div class="fl col p-right-10 w-10 d-flex justify-content-center">07:00</div>
                            <div class="fl col p-right-10 w-10 d-flex justify-content-center">TV</div>
                            <div class="fl col-2 p-right-10 w-15 d-flex justify-content-center">s/ 70</div>
                            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">30 </div>
                        </div>
                        <div class="m-top-20 d-flex justify-content-end col-md-12">
                            <button class="btn btn-1 btn-3">VER ASIENTOS DISPONIBLES</button>
                        </div>
                    </li>
                </div>
                <div>
                    <li id="" class="row-caja caja-fondo">
                        <div class="row row-one p-cos-10 col-md-12">
                            <div class="fl col p-right-10 w-10">
                                <span class="m-right-20 d-flex justify-content-center" style="font-size:20px;">15:30:27</span> 
                               <span class="d-flex justify-content-center" style="font-size:12px; ">14/05/2000</span> 
                             </div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">1</div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">07:00</div>
                            <div class="fl col p-right-10 w-10  d-flex justify-content-center">Baño</div>
                            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">s/ 70</div>
                            <div class="fl col-2 p-right-10 w-15  d-flex justify-content-center">30 </div>
                        </div>
                        <div class="m-top-20 d-flex justify-content-end col-md-12">
                            <button class="btn btn-1 btn-3">VER ASIENTOS DISPONIBLES</button>
                        </div>
                    </li>
                </div>
                
        </div>
        </br></br>
    </div>

    

</section>
    <!--Bootstrap js-->
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>