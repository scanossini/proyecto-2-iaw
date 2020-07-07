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
                                <label for="donacionesDisp" class="col-md-2 col-form-label text-md-right">Donaciones Disponibles</label>
                                <div class="col-md-6">
                                    <input id="donacionesDisp" type="number" class="form-control @error('donacionesDisp') is-invalid @enderror" name="donacionesDisp" value="{{ $donante->donacionesDisp }}" required> 
                                    @error('donacionesDisp')
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