@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Articulos</h1>
@stop

@section('content')
    <button type="button" class="btn btn-warning " data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Nuevo
        Articulo</button>

 
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

        $(document).ready(function() {
            $('#myTable').DataTable();

        });
    </script>



@stop
