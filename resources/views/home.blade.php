@extends('layouts.app')
@section('title', 'Servicios para el Hogar')
@section('css')
<link rel="stylesheet" href="/css/style.css">

<!-- Custom styles for this template -->
<link href="prueba/css/one-page-wonder.min.css" rel="stylesheet">

@stop
@section('content')
<div class="main-wrapper">
    @include('partials.navbar')
<article>
    <!--<section class="picture">
        <img src="/img/home1.jpg" alt="">
    </section>-->

<header class="masthead text-center">
    <div class="masthead-content">
        <div class="container">
            <h1 class="masthead-heading mb-0">¿Necesitas reparaciones para el hogar? </h1>
            <h2 class="masthead-subheading mb-0">Estamos para ayudarte</h2>
        </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
    
</header>

<!--<div class="item">
        <a class= item_link title="Nevera" href="/serviceOrder/serviceSummary">
            <img class="serv" src="/img/servicios/nevera.jpg" alt="">
            <h2>NEVERA</h2>
        </a>
    </div>  
    <div class="item">
        <a class= item_link title="lavadora" href="/serviceOrder/indexService">
            <img class="serv" src="/img/servicios/lavadora.jpg" alt="">
            <h2>LAVADORA</h2>
        </a>    
    </div>

<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
</div>-->


<div class="card mb-3">
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
            <div class="card-body">
                <h1 class="card-title">Servicios de reparación para el hogar a su alcance</h5>
                <p class="card-text" style="font-size:150%">
                Nuestro equipo técnico oferece repración de enseres eléctricos (lavadora, estufa ,nevera ,calentador y microondas), enseres a gas (estufa, calentador), servicio de plomería y electricidad.
                </p>
                <br>
                <em class="card-text" style="font-size:150%">
                *Servicios disponibles inicialmente para Bogotá
                </em>
                
            </div>
        </div>
    </div>
</div>


<div class="region">
    <div class="container text-center my-3">
        <h2 class="font-weight-dark">Reviews de nuestros usuarios</h2>
        <div class="row mx-auto my-auto">
            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                <div class="carousel-inner w-100" role="listbox">
                    <div class="carousel-item active" class="container-fluid">
                    <div class="carousel">
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/img/carousel/cliente2.jpg" width="283" height="283">
                                <div class="card-body">
                                    <h4 class="card-title">Myriam Torres</h4>
                                    <p class="card-text">Todo el proceso no podría haber sido más sencillo. Programe en línea, recibí la confirmación y una llamada telefónica 15 minutos antes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/img/carousel/plomero.jpg" width="283" height="283">
                                <div class="card-body">
                                    <h4 class="card-title">Rene Rodríguez</h4>
                                    <p class="card-text">Todero me ha permitido expander mi negocio de forma potencial al igual que mis ingresos. ¡Muy agradecido con esta plataforma! </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/img/carousel/cliente3.jpg" width="283" height="283">
                                <div class="card-body">
                                    <h4 class="card-title">David Bernal</h4>
                                    <p class="card-text">Desconocía donde conseguir expertos en mi barrio pero, gracias a Todero pude reparar mi lavadora.El servicio fue impecable y rápido</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>    

<!--Second slide-->

                    <div class="carousel-item">
                    <div class="carousel">
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">                                
                                <img class="card-img-top" src="/img/tecnico/tec.jpg" width="283" height="283" >                                
                                <div class="card-body">
                                    <h4 class="card-title">Teo Granados</h4>
                                    <p class="card-text">La plataforma para el registro es muy amigable además, a los cinco días empecé a recibir notificaciones de clientes interesados en mis servicios </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/img/carousel/cliente1.jpg" width="283" height="283" >                                
                                <div class="card-body">
                                    <h4 class="card-title">Lorena Correa</h4>
                                    <p class="card-text">Simplemente me encantó. Eliges el tipo de reparación que quieres, escoges un técico, te contactan y listo. ¡Fácil y sin intermediarios!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="float:left">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/img/carousel/electricista.jpg" width="283" height="283">
                                <div class="card-body">
                                    <h4 class="card-title">Luis Fuentes</h4>
                                    <p class="card-text">Desde que hago parte del equipo tecnico de Todero, mis ventas han incrementado en un 60%. ¡Estoy muy satisfecho y la recomiendo totalmente!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
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