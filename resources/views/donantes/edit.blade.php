@extends('base')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	    <div class="col-md-8">
            <div class="card">
                <div class="card-header align-center">Editar Donante {{ $donante->nombre }}
                    <div class="card-body" style="background-color: white;">
                        <form action="{{ route('updateDonante', ['donante' => $donante]) }}" method="POST">
                            <div class="form-group row">
                                <label for="nombre" class="col-md-2 col-form-label text-md-right">Nombre</label>
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $donante->nombre }}" required autocomplete="nombre" autofocus> 
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="edad" class="col-md-2 col-form-label text-md-right">Edad</label>
                                <div class="col-md-6">
                                    <input id="edad" type="number" class="form-control @error('edad') is-invalid @enderror" min="16" name="edad" value="{{ $donante->edad }}" required> 
                                    @error('edad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
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
                                    <select name="tipoSangre" id="tipoSangre" class="form-control @error('tipoSangre') is-invalid @enderror" required>
                                            <option value="O-">O-</option>
                                            <option value="O+">O+</option>
                                            <option value="A-">A-</option>
                                            <option value="A+">A+</option>
                                            <option value="B-">B-</option>
                                            <option value="B+">B+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="AB+">AB+</option>
                                        </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="donacionesDisp" class="col-md-2 col-form-label text-md-right">Donaciones Disponibles</label>
                                <div class="col-md-6">
                                    <input id="donacionesDisp" type="number" min="0" class="form-control @error('donacionesDisp') is-invalid @enderror" name="donacionesDisp" value="{{ $donante->donacionesDisp }}" required> 
                                    @error('donacionesDisp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Ubicacion" class="col-md-2 col-form-label text-md-right">Ubicacion</label>
                                <div class="col-md-6">
                                    <input id="ubicacion" type="text" class="form-control @error('Ubicacion') is-invalid @enderror" name="ubicacion" value="{{ $donante->ubicacion }}" required> 
                                    @error('Ubicacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto" class="col-md-2 col-form-label text-md-right">Foto</label>
                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror" name="foto" value="{{ $donante->foto }}"> 
                                    @error('Ubicacion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                          @csrf
                          {{ method_field('PUT') }}
                          <button type="submit" class="btn btn-primary">
                              Update
                          </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection