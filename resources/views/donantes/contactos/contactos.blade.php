@extends('base')

@section('content')
<div class="container">  
	<div class="row justify-content-center">
	    <div class="col-md-9">
            <div class="card">
                <div class="card-header align-center">Datos de contacto de {{ $donante->nombre }}
                    <div class="card-body" style="background-color: white;">
                        <table class="table">
                          <thead>
                            <tr>
                              <th scope="col">Tipo</th>
                              <th scope="col">Valor</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($contactos as $contacto)
                          <tr>
                              <th scope="row">{{ $contacto->tipoContacto }}</th>
                              <td>{{ $contacto->valorContacto }}</td>
                              <td>
                                <a href="{{ route('editContacto', [$donante, $contacto]) }}"><button type="button" class="btn btn-primary float-left">Editar</button></a>
                                <form action="{{ route('destroyContacto',[$contacto, $donante]) }}" method="POST" class="float-left">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar el contacto?')">Eliminar</button>
                                </form>
                              </td>
                            </tr>
                        @endforeach
                          </tbody>
                        </table>
                    </div>
                    <a href="{{ route('createContacto', $donante->id) }}"><button type="button" class="btn btn-primary float-right">Añadir Contacto</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection