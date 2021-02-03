@extends('layouts.app')
@section('title', 'Detalle del tecnico')
@section('resources')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@stop
@section('css')
<link rel="stylesheet" href="/css/style1.css">
@stop
@section('content')
@include('partials.navbar_cliente')

<body>
    <div class="container main-secction">
        <div class="row">
                <!--div class="col-md-12 col-sm-12 col-xs-12 image-section" id="imgback">
                    <img src="/img/fondo12.jpg">
                </div--> 
            <div class="row user-left-part">
                <div class="col-md-3 col-sm-3 col-xs-12 user-profil-part pull-left">
                    <div class="row ">
                        <div class="col-md-12 col-md-12-sm-12 col-xs-12 user-image text-center" id="contactTec">
                            <img src="/img/tecnico/tec.jpg" class="rounded-circle"  width="200" height="200" >
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 user-detail-section1 text-center">
                            <button id="btn-contact" (click)="clearModal()" data-toggle="modal" data-target="#contact" class="btn btn-info btn-block follow">Contactarme</button>                           
                        </div>         
                    </div>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 pull-right profile-right-section">
                    <div class="row profile-right-section-row">
                        <div class="col-md-12 profile-header">
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6 profile-header-section1 pull-left">
                                @foreach($technicianView as $key =>$tecnico)
                                <h1>{{ $tecnico['name'] }}</h1>
                                    <h5>Experiencia de {{ $tecnico['ExperienceTime'] }}</h5>
                                </div>
                                <div class="col-md-4 col-sm-6 col-xs-6 profile-header-section1 text-right pull-rigth">
                                    <a href="/clientes/listado-proveedores" class="btn btn-primary btn-block">Volver al listado de técnicos</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                        <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                  <a class="nav-link active" href="#profile" role="tab" data-toggle="tab"><i class="fas fa-user-circle"></i> Perfil Profesional</a>
                                                </li>
                                                <li class="nav-item">
                                                  <a class="nav-link" href="#buzz" role="tab" data-toggle="tab"><i class="fas fa-info-circle"></i> Información Detallada</a>
                                                </li>                                                
                                              </ul>
                                              
                                              <!-- Tab panes -->
                                              <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade show active" id="profile">
                                                        <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Nombre</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                <p>{{ $tecnico['name'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Telefono principal</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['phoneNumber1'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Telefono secundario</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['phoneNumber2'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Email</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['email'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Dirección</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['address'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <label>Barrio</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['neighborhood'] }}</p>
                                                                </div>
                                                            </div>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="buzz">
                                                        <div class="row" id="profile">
                                                                <div class="col-md-6">
                                                                    <label>Experiencia en la actividad</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['ExperienceTime'] }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="profile">
                                                                <div class="col-md-6">
                                                                    <label>Servicios a prestar</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $service }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row" id="profile">
                                                                <div class="col-md-6">
                                                                    <label>Horario de atención</label>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p>{{ $tecnico['scheduleService'] }} </p>
                                                                </div>
                                                            </div>

                                                            <div class="row" id="profile">
                                                                <div class="col-md-12">
                                                                    <div class="card bg-light mb-12" style="max-width: 30rem;">
                                                                        <div class="card-header">Acerca del técnico</div>
                                                                        <div class="card-body">
                                                                            <p class="card-text">{{ $tecnico['description'] }}</p>
                                                                            @endforeach
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                </div>
                                                
                                              </div>
                          
                                </div>
                                <div class="col-md-4 img-main-rightPart">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row image-right-part">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('serviceOrder.applianceForm')
@include('partials.footer')
</body>
@stop
