@extends('layouts.app')
@section('title', 'Mi perfil')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Actualizar mis datos') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.update', $data_user) }}">
                        @method('PUT')
                        @csrf
                        <img src="/img/new_logo.png">
                        <br>
                        <hr>

                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data_user->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label> 
                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $data_user->last_name }}" required autocomplete="last_name" autofocus>
                                 @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electronico') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data_user->email }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="phoneNumber"  class="col-md-4 col-form-label text-md-right">Telefono</label>
                            <div class="col-md-6">
                                <input type="tel" name="phoneNumber" id="phoneNumber" value="{{ $data_user->phoneNumber }}" class="form-control" pattern="[0-9]{10}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hometown" class="col-md-4 col-form-label text-md-right">Ciudad de Origen</label>
                            <div class="col-md-6">
                                <input type="text" name="hometown" id="hometown" value="{{ $data_user->hometown }}" class="form-control" required>     
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right">Nacionalidad</label>
                            <div class="col-md-6">
                                <input type="text" name="nationality" id="nationality" value="{{ $data_user->nationality }}" class="form-control" required>     
                            </div> 
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Guardar y actualizar" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">{{ __('Actualizar direccion de residencia') }}</div>
                    <div class="card-body">
                        <form method="POST" action="#">
                           <!-- @method('PUT')
                            @csrf -->
                            <div  class="form-group row">
                                <div class="col-7">
                                    <label for="street">Direccion</label>
                                    <input type="text" class="form-control" id="street" value="" name="street">
                                </div>

                                <div class="col-3">
                                    <label for="neighborhood">Barrio</label>
                                    <input type="text" class="form-control" id="neighborhood" value="" name="neighborhood">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="city_residence" class="col-md-4 col-form-label text-md-right">Ciudad de residencia</label>
                                <div class="col-md-6">
                                    <input type="text" name="city_residence" id="city_residence" value="" class="form-control" required>     
                                </div> 
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" value="Guardar y actualizar" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
            </div> 
        </div>
    </div>
</div>
<br>
@include('partials.footer')
@endsection
