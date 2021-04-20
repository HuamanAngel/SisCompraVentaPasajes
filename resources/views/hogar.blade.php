@extends('layouts.app')


@section('contenido_js')
    
@endsection

@section('contenido_cSS')
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/inicio.css')}}">
   

@endsection


@section('content')

    <header class="container-fluid" >
        <div class="row" style="height: 515px; background-color:#5CBD9D">
            <div class="col-12 align-self-center text-center" >
                <img src="{{asset('img/bus11.jpg')}}" class="img-fluid" width="1800px">
            </div>
            
        </div>
    </header>

    <section class="container-fluid">
        <div class="row" >
            <div class="col-12 text-center mt-5" >
                <div class="col-12 align-self-center text-center">
                    <h1>Bienvenido a BusVid19!!!</h1>
                    <hr>
                    <p>La mejor opción para disfrutar tu viaje.</p>                
                </div>                 
            </div>                      
        </div>
    </section>

    <section class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mt-5" >
                <div class="col-12 align-self-center text-center" >
                    <img src="{{asset('img/ofertas1.PNG')}}" class="img-fluid" width="2000px">
                </div>   
            </div>            
        </div>
    </section>
    <footer>
       
    </footer>

@endsection

@section('contenido_abajo_js')
    
@endsection