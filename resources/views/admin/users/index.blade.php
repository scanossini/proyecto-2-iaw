@extends('base')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	    <div class="col-md-8">
            <div class="card">
                <div class="card-header align-center">Usuarios
                    <div class="card-body" style="background-color: white;">
                        @foreach($users as $user)
                           Nombre: {{ $user->name }} - Mail: {{ $user->email }} <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection