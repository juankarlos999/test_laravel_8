@extends('layouts.app')
@section('title', 'Formulario perfil de cliente')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
<div class="jumbotron mb-3">
    <img src="/img/logo.png" alt="">
    <h1 class="display-4">Gracias por usar nuestro servicios!</h1>
    <p class="h3" class="lead">Aquí encontrará todos los detalles de su servicio.</p>
    <hr class="my-1">
</div>

<div class="card text-center mb-3">
    <div class="card-header">
        
    </div>
    <div class="card-body">
        <h3 class="card-title">Orden de servicio</h5>
        <p class="h5" class="card-text">En las proximas dos horas el técnico se comunicará con usted el valor estimado de la reparación, hora y fecha del servicio.</p>
    </div>
</div>

<div class="card mb-3">
    <div class="card-header">
        
    </div>
    <div class="card-body">
        <h3 class="card-title">Resumen de la orden</h5>

        <div class="card w-50">
            <div class="card-body">   
            <div class="table-responsive">
                <table class="table table-sm" style="max-width: 35rem;">        
                    <tbody class="h5">
                        <tr class="text-left">
                            <th scope="row">Ténico</th>
                            <td>Mark Suarez</td>
                        </tr>
                        <tr class="text-left">
                            <th scope="row">Cliente</th>
                            <td>Jacob Mendez</td>
                        </tr>
                        <tr class="text-left">
                            <th scope="row">Servicio/Producto</th>
                            <td>Lavadora</td>
                        </tr>
                        <tr class="text-left">
                            <th scope="row">Detalle</th>
                            <td>Marcha Whirpool,Serial #42567475 Modelo #56788de, 7años </td>
                        </tr>
                        <tr class="text-left">
                            <th scope="row">Problema</th>
                            <td>No completa el ciclo de cecado</td>
                        </tr>
                        <tr class="text-left">
                            <th scope="row">Valor Estimado</th>
                            <td>$120.000</td>
                        </tr>
                        <tr class="text-left">
                            <th scope="row">Hecha/Hora</th>
                            <td>Martes 5 de Enero , 4:30pm</td>
                        </tr>
                        <tr class="text-left">
                        <th scope="row">Estatus de la orden</th>
                            <td>Open</td>
                        </tr>
                    </tbody>        
                </table>
            </div>
            </div>
        </div>    
    </div>
</div>

<div class="card text-center">
    <div class="card-header">
        
    </div>
    <div class="card-body">
        <h3 class="card-title">Quiero cancelar el servicio</h5>
        <p class="h5" class="card-text">Apreciado cliente, se solicita cancelar el servicio por lo menos 5 horas antes de la cita</p>
        <a href="#" class="btn btn-primary">Cancelar</a>
    </div>

    <div class="card-footer text-muted" class="card text-center">
        Todero Servicios para el Hogar 2020© 
    </div>

</div>



@endsection
