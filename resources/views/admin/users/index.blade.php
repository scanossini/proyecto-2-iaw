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
                              <th scope="col">Mail</th>
                              <th scope="col">Roles</th>
                              <th scope="col">Acciones</th>
                            </tr>
                          </thead>
                          <tbody>
                          @foreach($users as $user)
                          <tr>
                              <th scope="row">{{ $user->id }}</th>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                              <td>{{ implode(', ',  $user->roles()->get()->pluck('name')->toArray()) }}</td>
                              <td>
                                <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary float-left">Editar</button></a>
                                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="float-left">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                  <button type="submit" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar el usuario?')">Eliminar</button>
                                </form>
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