@extends('layouts.app')
@section('title', 'Registro')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registro Nuevo Usuario') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                                @csrf
                        <div class="form-group row">
                            <label for="typeUser" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                            <div class="col-md-6">
                                <select id="typeUser" class="form-control" name="typeUser" autofocus required>
                                    <option value="Usuario" selected>Usuario</option>
                                </select>
                            </div>
                        </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre completo') }}</label> 

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
                                <label for="telefono1"  class="col-md-4 col-form-label text-md-right">Telefono principal</label>
                                <div class="col-md-6">
                                    <input type="tel" name="phoneNumber1" id="telefono1" class="form-control" pattern="[0-9]{10}" required>
                                </div>
                            </div>
            
                            <div class="form-group row">
                                <label for="telefono2" class="col-md-4 col-form-label text-md-right">Telefono secundario</label>
                                <div class="col-md-6">
                                    <input type="tel" name="phoneNumber2" id="telefono2" class="form-control" pattern="[0-9]{10}" required>
                                </div>       
                            </div>

                            <div class="form-group row">
                                <label for="direccion"  class="col-md-4 col-form-label text-md-right">Direccion</label>
                                <div class="col-md-6">
                                    <input type="text" name="address" id="direccion" class="form-control" required>     
                                </div>   
                            </div>

                            <div class="form-group row">
                                <label for="barrio" class="col-md-4 col-form-label text-md-right">Barrio</label>
                                <div class="col-md-6">
                                <select id="barrio" name="neighborhood" class="form-control" autofocus required>
                                    <option selected></option>
                                    <option value="Restrepo">Restrepo</option>
                                    <option value="Suba Rincon">Suba Rincon</option>
                                    <option value="Teusaquillo">Teusaquillo</option>
                                </select>
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
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
