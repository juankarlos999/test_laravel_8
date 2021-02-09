@extends('layouts.app')
@section('title', 'Detalle curso')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
@include('partials.navbar_student')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('My programa academico') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                                @csrf
                        <div class="form-group row">
                            <label for="typeUser" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del programa') }}</label>
                            <div class="col-md-6">
                                <select id="typeUser" class="form-control" name="typeUser" autofocus required>
                                    <option value="Usuario" selected>Desarrollo web</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="barrio" class="col-md-4 col-form-label text-md-right">Facultad</label>
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
                                <label for="barrio" class="col-md-4 col-form-label text-md-right">Campus</label>
                                <div class="col-md-6">
                                <select id="barrio" name="neighborhood" class="form-control" autofocus required>
                                    <option selected></option>
                                    <option value="Restrepo">Restrepo</option>
                                    <option value="Suba Rincon">Suba Rincon</option>
                                    <option value="Teusaquillo">Teusaquillo</option>
                                </select>
                                </div>
                            </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Guardar') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('partials.footer')
@stop