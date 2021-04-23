<!DOCTYPE html>
<html>
<head>
    <title>Pasaje Electronico </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
    <h2 class="text-center">Pasaje Electronico N°{{ $compra->id }}</h2>

    <h5>Datos de pasajero</h5>

    <label for=""  style="width: 49%">Nombres : {{ $compra->compraUser->use_name }}</label> <label for="" style="width: 49%">Apellidos : {{ $compra->compraUser->use_apellido }} </label>
    <br>
    <label for=""  style="width: 49%">DNI : {{ $compra->compraUser->use_dni }}</label> <label for="" style="width: 49%">Telefono : {{ $compra->compraUser->use_tel }}</label>
    <br>
    <label for=""  style="width: 49%">Sexo : {{ $compra->compraUser->use_sexo }}</label>
    <br>
    <br>
    <h5>Datos de viaje</h5>
    <br>
    <label for=""  style="width: 49%">Fecha de compra : {{ $compra->com_fecha_compra }}</label> <label for="" style="width: 49%">N° de asiento : {{ $compra->compraPasaje->pas_numero_asiento }} </label>
    <br>
    <label for=""  style="width: 49%">Fecha de ida : {{ $compra->compraPasaje->pas_fecha_pasaje }}</label> <label for="" style="width: 49%">Costo : {{ $compra->compraPasaje->pas_costo }} </label>
    <br>
    <label for=""  style="width: 49%">Origen de viaje : {{ $compra->compraPasaje->pasIti->iti_terminal_origen }}</label> <label for="" style="width: 49%">Destino de viaje : {{ $compra->compraPasaje->pasIti->iti_terminal_llegada }} </label>
    <br>




</body>
</html>