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
                              <th scope="col">Foto</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($donantes as $donante)
                          <tr>
                              <th scope="row">{{ $donante->id }}</th>
                              <td>{{ $donante->nombre }}</td>
                              <td>{{ $donante->donacionesDisp }}</td>
                              <td><img src="data:image/jpg;base64, {{$donante->foto}}" class="img-fluid" alt=""></td>
                              <td>
                                <a href="{{ route('donantes.edit', $donante->id) }}"><button type="button" class="btn btn-primary float-left">Editar</button></a>
                                <form action="{{ route('donantes.destroy', $donante->id) }}" method="POST" class="float-left">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar el donante?')">Eliminar</button>
                                </form>
                              </td>
                  
                            </tr>
                        @endforeach
                          </tbody>
                        </table>
                    </div>
                    <a href="{{ route('createDonante') }}"><button type="button" class="btn btn-primary float-right">Añadir Donante</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection