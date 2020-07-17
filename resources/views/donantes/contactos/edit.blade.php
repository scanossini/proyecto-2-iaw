@extends('base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header align-center">Editar Contacto
                    <div class="card-body" style="background-color: white;">
                        <form action="{{ route('updateContacto', ['donante' => $donante_id, 'contacto' => $contacto]) }}" method="POST">
                            <div class="form-group row">
                                <label for="tipoContacto" class="col-md-2 col-form-label text-md-right">Tipo de Contato</label>
                                <div class="col-md-6">
                                    <input id="tipoContacto" type="text" class="form-control @error('tipoContacto') is-invalid @enderror" name="tipoContacto" value="{{ $contacto->tipoContacto }}" required>
                                    @error('tipoContacto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="valorContacto" class="col-md-2 col-form-label text-md-right">Valor</label>
                                <div class="col-md-6">
                                    <input id="valorContacto" type="text" class="form-control @error('valorContacto') is-invalid @enderror" name="valorContacto" value="{{ $contacto->valorContacto }}" required>
                                    @error('valorContacto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <input id="donante_id" type="hidden" name="donante_id" value="{{ $donante_id }}" required>
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