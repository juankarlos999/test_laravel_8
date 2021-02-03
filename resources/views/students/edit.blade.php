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
                    <form id="form" action="{{ route('student.update', $data_student) }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label> 
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data_student->name }}" required autocomplete="name" autofocus>
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
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ $data_student->last_name }}" required autocomplete="last_name" autofocus>
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
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $data_student->email }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                <label for="telefono"  class="col-md-4 col-form-label text-md-right">Telefono</label>
                                <div class="col-md-6">
                                    <input type="tel" name="phoneNumber" id="telefono" value="{{ $data_student->phoneNumber }}" class="form-control" pattern="[0-9]{10}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="direccion"  class="col-md-4 col-form-label text-md-right">Direccion</label>
                                <div class="col-md-6">
                                    <input type="text" name="address" id="direccion" value="{{ $data_student->address }}" class="form-control" required>     
                                </div>   
                            </div>
                            <div class="form-group row">
                                <label for="city_residence" class="col-md-4 col-form-label text-md-right">Ciudad de residencia</label>
                                <div class="col-md-6">
                                    <input type="text" name="city_residence" id="city_residence" value="{{ $data_student->city_residence }}" class="form-control" required>     
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="hometown" class="col-md-4 col-form-label text-md-right">Ciudad de Origen</label>
                                <div class="col-md-6">
                                    <input type="text" name="hometown" id="hometown" value="{{ $data_student->hometown }}" class="form-control" required>     
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="nationality" class="col-md-4 col-form-label text-md-right">Nacionalidad</label>
                                <div class="col-md-6">
                                    <input type="text" name="nationality" id="nationality" value="{{ $data_student->nationality }}" class="form-control" required>     
                                </div> 
                            </div>
                            <hr>
                            <h4>Datos del programa</h4>
                            <div class="form-group row">
                                <label for="program_name" class="col-md-4 col-form-label text-md-right">Nombre del programa</label>
                                <div class="col-md-6">
                                    <input type="text" name="program_name" id="program_name" class="form-control" required>     
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="school" class="col-md-4 col-form-label text-md-right">Facultad</label>
                                <div class="col-md-6">
                                    <input type="text" name="school" id="school" class="form-control" required>     
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="campus" class="col-md-4 col-form-label text-md-right">Campus</label>
                                <div class="col-md-6">
                                    <input type="text" name="campus" id="campus" class="form-control" required>     
                                </div> 
                            </div>
                            <hr>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <input type="submit" id="btnSend" name="btnSend" value="Actualizar formulario" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                            <hr>
 
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 
@include('partials.footer')
@endsection
