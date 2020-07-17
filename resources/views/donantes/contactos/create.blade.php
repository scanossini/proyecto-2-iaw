@extends('base')

@section('content')
<div class="container">
	<div class="row justify-content-center">
	    <div class="col-md-8">
            <div class="card">
                <div class="card-header align-center">Crear un Contacto
                    <div class="card-body" style="background-color: white;">
                        <form action="{{ route('saveContacto', $donante_id) }}" enctype="multipart/form-data" method="POST">
                            <div class="form-group row">
                                <label for="tipoContacto" class="col-md-2 col-form-label text-md-right">Tipo de Contacto</label>
                                <div class="col-md-6">
                                    <input id="tipoContacto" type="text" class="form-control @error('tipoContacto') is-invalid @enderror" name="tipoContacto" required autofocus> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="valorContacto" class="col-md-2 col-form-label text-md-right">Valor</label>
                                <div class="col-md-6">
                                    <input id="valorContacto" type="texto" class="form-control @error('valorContacto') is-invalid @enderror" name="valorContacto" required>
                                </div>
                            </div>
                            <input id="donante_id" type="hidden" name="donante_id" value="{{ $donante_id }}" required>
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