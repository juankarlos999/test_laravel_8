@extends('layouts.app')
@section('title', 'Clientes')
@section('css')
<link rel="stylesheet" href="/css/style1.css">
@stop
@section('content')
@include('partials.navbar_cliente')
<div class="picture">
                <div>
                    <img src="/img/funcionamiento1.png" alt="">
                </div>
                <div>
                    <img src="/img/funcionamiento.png" alt="">
                </div>
            </div>
        <article>
            <div class="region">
                    <div class="comofunciona">
                        <h1 id=funciona>¿Cómo funciona?</h1>
                    </div>
                    <div class="caja">                    
                        <div class="proceso">
                            <img src="/img/funcionamiento/search.png" alt="">
                            <h2>Busca tu servicio</h2>
                            <p>Dinos donde y cuando</p>                                        
                        </div>

                        <div class="proceso">                                
                            <img src="/img/funcionamiento/check.png" alt="">
                            <h2>Escoge tu tecnico</h2>
                            <p>Acceso a nuestra lista de tecnicos cercanos a tu casa</p>                           
                        </div>

                        <div class="proceso">                                
                            <img src="/img/funcionamiento/calendar.png" alt="">
                            <h2>Agenda tu cita</h2>
                            <p>Acceso a nuestra lista de tecnicos cercanos a tu casa</p>                                          
                        </div>
                        <div class="proceso">                                
                            <img id="felicitaciones" src="/img/funcionamiento/medal.png" alt="">
                            <h2>Felicitaciones</h2>
                            <p>Buen trabajo, dar por hecho tu servicio de reparación</p>                            
                        </div>
                    </div>  
            </div>
        </article>
@include('partials.footer')
@stop

