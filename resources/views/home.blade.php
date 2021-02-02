@extends('layouts.app')
@section('title', 'Servicios para el Hogar')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
<div class="main-wrapper">
    @include('partials.navbar')
<article>

<header class="masthead text-center">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">Bienvenido</h1>
            <h2 class="masthead-subheading mb-0">Estamos para ayudarte</h2>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
    
</header>

<div class="card mb-3">
    <br>
    <div class="row g-0">
        <div class="col-md-4">
            <div class="card-group">
            <div class="card-group">
                <div>
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/servicios/nevera.jpg" width="258" height="158" alt="Card image">
                    </div>
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/servicios/estufa.jpg" width="258" height="158" alt="Card image">
                    </div>
                </div>
                <div>     
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/servicios/plomeria.jpg" width="258" height="158" alt="Card image">
                    </div>
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/servicios/electricidad.jpg" width="258" height="158" alt="Card image">
                    </div>
                </div>      
            </div>

        </div>
        </div>   
        <div class="col-md-7">
            <br>
            <div class="card-body">
                <h1 cleass="card-title">Desarrollo de aplicaciones a su alcance</h5>
                <p class="card-text" style="font-size:150%">
                Nuestro equipo técnico oferece soluciones en tecnologia rapidas y efectivas.
                </p>
                <br>
                <em class="card-text" style="font-size:150%">
                *Servicio disponible inicialmente para Bogotá
                </em>
                
            </div>
        </div>
    </div>
</div>
</div>
</div>
    @include('partials.footer')
    </div>
    </article>
@stop   