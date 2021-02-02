@extends('layouts.app')
@section('title', 'Servicios en desarrollo de aplicaciones')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
<div class="main-wrapper">
    @include('partials.navbar')
<article>

<div class="card mb-3">
    <br>
    <div class="row g-0">
        <div class="col-md-4">
            <div class="card-group">
            <div class="card-group">
                <div>
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/nosotros.jpg" width="258" height="158" alt="Card image">
                    </div>
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/develop2.jpg" width="258" height="158" alt="Card image">
                    </div>
                </div>
                <div>     
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/develop3.jpg" width="258" height="158" alt="Card image">
                    </div>
                    <div class="card" style="max-width: 160px">
                        <img class="card-img" src="/img/develop1.png" width="258" height="158" alt="Card image">
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