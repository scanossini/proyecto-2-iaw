@extends('base')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	    <div class="col-md-8">
            <div class="card">
                <div class="card-header align-center">Usuarios
                    <div class="card-body" style="background-color: white;">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Donaciones Disponibles</th>
                              <th scope="col">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($donantes as $donante)
                          <tr>
                              <th scope="row">{{ $donante->id }}</th>
                              <td>{{ $donante->nombre }}</td>
                              <td>{{ $donante->donacionesDisp }}</td>
                              <td>
                                <a href="{{ route('donantes.edit', $donante->id) }}"><button type="button" class="btn btn-primary">Editar</button></a>
                                <a href="{{ route('donantes.destroy', $donante->id) }}"><button type="button" class="btn btn-danger">Eliminar</button></a>
                              </td>
                            </tr>
                        @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection