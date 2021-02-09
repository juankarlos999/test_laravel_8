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
                <div class="card-header">{{ __('Elegir mi programa academico') }}</div>

                <div class="card-body">
                    <form method="" action="#">
                       <!-- @csrf -->
                       <!-- Programs -->
                        @foreach($data_program as $key =>$program)
                        <div class="form-group row">
                            <label for="name_program" class="col-md-4 col-form-label text-md-right">{{ __('Nombre del programa') }}</label>
                            <div class="col-md-6">
                                <select id="name_program" class="form-control" name="name_program" autofocus required>
                                    <option value="{{ $program->id }}" selected>{{ $program->name_program }}</option>
                                </select>
                            </div>
                        </div>
                        @endforeach
                        <!-- Faculty -->
                        @foreach($data_program as $key =>$faculty)
                        <div class="form-group row">
                                <label for="faculty" class="col-md-4 col-form-label text-md-right">Facultad</label>
                                <div class="col-md-6">
                                <select id="faculty" name="faculty" class="form-control" autofocus required>
                                    <option selected></option>
                                    <option value="{{ $faculty->id }}">{{ $faculty->name_program }}</option>
                                </select>
                                </div>
                            </div>
                        @endforeach
                        <!-- Campus -->
                        @foreach($data_program as $key =>$campus)
                            <div class="form-group row">
                                <label for="campus" class="col-md-4 col-form-label text-md-right">Campus</label>
                                <div class="col-md-6">
                                <select id="campus" name="campus" class="form-control" autofocus required>
                                    <option selected></option>
                                    <option value="{{ $faculty->id }}">{{ $campus->campus }}</option>
                                </select>
                                </div>
                            </div>
                        @endforeach
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
<hr>
@stop