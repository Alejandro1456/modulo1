@extends('adminlte::page')

@section('title', 'padres')

@section('content_header')
    <h1>padres</h1>
@stop

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">

                    <a href="{{ route('padres.index') }}" class="btn btn-md btn-success mb-3">REGRESAR</a>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">DATOS DEL PADRE DE FLIA{{  $padre->ci }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                                
                                        <p>
                                            <label>APELLIDOS : </label><b> {{ $padre->apellidos }}</b>
                                        </p>
                                        <p>
                                            <label>NOMBRES : </label><b> {{ $padre->nombres }}</b>
                                        <p>
                                        <p>
                                            <label>CELTEL : </label><b> {{ $padre->celtel }}</b>
                                        <p>
                                        <p>
                                            <label>DIRECCION: </label><b> {{ $padre->direccion }}</b>
                                        <p>
                                        <p>
                                            <label>PARENTESCO : </label><b> {{ $padre->parentesco }}</b>
                                        <p>
                                        <p>
                                            <label>DISTRITO : </label><b> {{ $padre->distrito }}</b>
                                        <p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@stop