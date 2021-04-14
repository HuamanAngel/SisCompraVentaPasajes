@extends('layouts.app')
@extends('adminlte::page')

@section('title','Usuarios')
@section('contenido_js')

@endsection

@section('contenido_cSS')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.bootstrap4.min.css">
@endsection


@section('content')
    <div class="card">
        <div class="card-body">

            <table class="table table-striped" id='usuarios'>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>origen</th>
                        <th>destino</th>
                        <th>fecha partida</th>
                        <th>fecha llegada</th>
                    </tr>
                </thead>


                <tbody>
                    @foreach ($user as $user)
                        <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->origen}}</td>
                                <td>{{$user->destino}}</td>
                                <td>{{$user->partida}}</td>
                                <td>{{$user->llegada}}</td>


                        <tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('contenido_abajo_js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/responsive.bootstrap4.min.js"></script>
        <script>
            $('#usuarios').DataTable({
                responsive : true
            });
        </script>
@endsection
