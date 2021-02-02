@extends('layouts.app')
@section('title', 'Mi perfil')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
@include('partials.navbar_cliente')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"> 
                <div class="card-header">{{ __('ACTUALIZAR MI PERFIL') }}</div>
                <div class="card-body">
    <form action="{{ route('clientes.update', $data_user) }}" method="post">
        @method('put')
        @csrf

        <div class="form-group row">
            <label for="nombre"  class="col-md-4 col-form-label text-md-right">Nombre completo</label>
            <div class="col-md-6">
                <input type="text" name="name" id="nombre" class="form-control" value="{{ $data_user->name }}" required>
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
            <label for="telefono1"  class="col-md-4 col-form-label text-md-right">Telefono principal</label>
            <div class="col-md-6">
                <input type="text" name="phoneNumber1" id="telefono1" class="form-control" value="{{ $data_user->phoneNumber1 }}" required>
            </div>
        </div>
            
        <div class="form-group row">
            <label for="telefono2" class="col-md-4 col-form-label text-md-right">Telefono secundario</label>
            <div class="col-md-6">
                <input type="text" name="phoneNumber2" id="telefono2" class="form-control" value="{{ $data_user->phoneNumber2 }}">
            </div>       
        </div>

        <div class="form-group row">
            <label for="direccion"  class="col-md-4 col-form-label text-md-right">Direccion</label>
            <div class="col-md-6">
                <input type="text" name="address" id="direccion" class="form-control" value="{{ $data_user->address }}">     
            </div>   
        </div>

        <div class="form-group row">
            <label for="barrio" class="col-md-4 col-form-label text-md-right">Barrio</label>
            <div class="col-md-6">
            <select class="form-control" id="barrio" name="neighborhood">
                <option selected></option>
                <option value="Restrepo" @if($data_user->neighborhood == "Restrepo") selected  @endif >Restrepo</option>
                <option value="Suba Rincon" @if($data_user->neighborhood == "Suba Rincon") selected  @endif >Suba Rincon</option>
                <option value="Teusaquillo" @if($data_user->neighborhood == "Teusaquillo") selected  @endif >Teusaquillo</option>
            </select>
            </div>
        </div>
        <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </div>
        </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
@include('partials.footer')
@endsection
