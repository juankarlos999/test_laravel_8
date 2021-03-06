@extends('layouts.app')
@section('title', 'Registro')
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('PASO 1: Registro Nuevo Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
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
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control" pattern="[0-9]{10}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hometown" class="col-md-4 col-form-label text-md-right">Ciudad de Origen</label>
                            <div class="col-md-6">
                                <input type="text" name="hometown" id="hometown" class="form-control" required>     
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="nationality" class="col-md-4 col-form-label text-md-right">Nacionalidad</label>
                            <div class="col-md-6">
                                <input type="text" name="nationality" id="nationality" class="form-control" required>     
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" value="Guardar y continuar" class="btn btn-primary">
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
                <div class="card-header">{{ __('PASO 2: Información sobre su lugar de residencia y Rol') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('address.create') }}">
                            @csrf
                            <div  class="form-group row">
                                <div class="col-7">
                                    <label for="street">Direccion</label>
                                    <input type="text" class="form-control" id="street" name="street">
                                </div>

                                <div class="col-3">
                                    <label for="neighborhood">Barrio</label>
                                    <input type="text" class="form-control" id="neighborhood" name="neighborhood">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="city_residence" class="col-md-4 col-form-label text-md-right">Ciudad de residencia</label>
                                <div class="col-md-6">
                                    <input type="text" name="city_residence" id="city_residence" class="form-control" required>     
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label for="role_id" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                                <div class="col-md-6">
                                    <select id="role_id" class="form-control" name="role_id" autofocus required>
                                        <option></option>
                                        <option value="1">Estudiante</option>
                                        <option value="2">Administrador</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" value="Enviar formulario" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
            </div> 
        </div>
    </div>
</div>
<br>
@endsection
