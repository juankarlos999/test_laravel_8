@extends('layouts.app')
@section('title', 'Listado de tecnicos')
@section('css')
<link rel="stylesheet" href="/css/style1.css">
@stop
@section('content')
@include('partials.navbar_cliente')

<div class="table-responsive-md">
<div class=container>
<div class="form-group row" id="select-barrio">
<label for="barrio" class="text-md-right">Barrio</label>
                <div class="col-md-4">
                    <select class="form-control" id="barrio" name="barrio">
                        <option selected></option>
                        <option value="1">Restrepo</option>
                        <option value="2">Suba Rincon</option>
                        <option value="3">Teusaquillo</option>
                    </select>
                </div>
    </div>
    <table class="table">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Barrio</th>
                    <th scope="col">Experiencia</th>
                    <th scope="col">Servicios</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($technicianList as $key =>$tecnico)
                    <tr class="table-light">
                        <td>
                            <img src='http://ximg.es/100x100/09f/fff&text=tecnico1'>                
                        </td>
                        <td>{{ $tecnico['name'] }}</td>
                        <td>{{ $tecnico['neighborhood'] }}</td>
                        <td>{{ $tecnico['ExperienceTime'] }}</td>
                        <td>{{ $service }}</td>
                        <td>
                            <a class="btn btn-outline-primary btn-lg" href="{{ route('list-technician.show', [$tecnico['id'], $typeAppliance]) }}" role="button">Ver detalle</a>
                        </td>  
                    </tr>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@stop