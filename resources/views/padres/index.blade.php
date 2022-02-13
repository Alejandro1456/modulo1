@extends('adminlte::page')

@section('title', 'Padres')

@section('content_header')
    <h1>Registro de Padres de Flia.</h1>
@stop

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('padres.create') }}" class="btn btn-md btn-success mb-3">NUEVO PADRES</a>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">CI</th>
                                <th scope="col">APELLIDOS</th>
                                <th scope="col">NOMBRES</th>
                                <th scope="col">CEL/TEL</th>
                                <th scope="col">DIRECCION</th>
                                <th scope="col">PARENTESCO</th>
                                <th scope="col">DISTRITO</th>
                                <th scope="col">ACCIONES</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($padres as $padre)
                                <tr>
                                    <td>{{ $padre->ci }}</td>  
                                    <td>{{ $padre->apellidos }}</td>
                                    <td>{{ $padre->nombres }}</td>                                  
                                    <td>{{ $padre->celtel }}</td>  
                                    <td>{{ $padre->direccion }}</td>  
                                    <td>{{ $padre->parentesco }}</td>  
                                    <td>{{ $padre->distrito }}</td>  
                                    
                                    <td class="text-center">
                                            <form onsubmit="return confirm('¿Está seguro?');" action="{{ route('padres.destroy', $padre->id) }}" method="POST">
                                            <a href="{{ route('padres.show', $padre->id) }}" class="btn btn-sm btn-info">MOSTRAR</a>
                                            <a href="{{ route('padres.edit', $padre->id) }}" class="btn btn-sm btn-primary">EDITAR</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">ELIMINAR</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                  Los datos de los Padres de flia aún no están disponibles.
                                  </div>
                              @endforelse
                            </tbody>
                          </table>  
                          {{ $padres->links() }}
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

    <script>
        //Mensaje
        @if(session()-> has('success'))
        
            toastr.success('{{ session('success') }}', 'ÉXITO'); 

        @elseif(session()-> has('error'))

            toastr.error('{{ session('error') }}', 'ERROR'); 
            
        @endif
    </script>
@stop