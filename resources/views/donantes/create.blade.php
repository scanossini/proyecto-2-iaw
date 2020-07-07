@extends('base')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	    <div class="col-md-8">
            <div class="card">
                <div class="card-header align-center">Crear un Donante
                    <div class="card-body" style="background-color: white;">
                        <form action="{{ route('saveDonante') }}" enctype="multipart/form-data" method="POST">
                            <div class="form-group row">
                                <label for="nombre" class="col-md-2 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" required autofocus> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edad" class="col-md-2 col-form-label text-md-right">Edad</label>
                                <div class="col-md-6">
                                    <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" name="edad" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sexo" class="col-md-2 col-form-label text-md-right">Sexo</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="radioM" value="m" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Masculino
                                        </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="radioF" value="f">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Femenino
                                        </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tipoSangre" class="col-md-2 col-form-label text-md-right">Tipo de Sangre</label>
                                <div class="col-md-6">
                                    <input id="tipoSangre" type="text" class="form-control @error('tipoSangre') is-invalid @enderror" name="tipoSangre" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="donacionesDisp" class="col-md-2 col-form-label text-md-right">Donaciones Disponibles</label>
                                <div class="col-md-6">
                                    <input id="donacionesDisp" type="number" class="form-control @error('donacionesDisp') is-invalid @enderror" name="donacionesDisp" required> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ubicacion" class="col-md-2 col-form-label text-md-right">Ubicacion</label>
                                <div class="col-md-6">
                                    <input id="ubicacion" type="text" class="form-control @error('ubicacion') is-invalid @enderror" name="ubicacion" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label text-md-right">Foto</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" required>
                                </div>
                            </div>
                                @csrf
                            <button type="submit" class="btn btn-primary">
                                Crear
                            </button>
                        </form >
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection