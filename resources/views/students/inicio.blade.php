@extends('layouts.app')
@section('title', 'Mi area Estudiante')
@section('css')
<link rel="stylesheet" href="/css/style.css">
@stop
@section('content')
@include('partials.navbar_student')
<h1>BIENVENIDO</h1>
<br>
<hr>
<img src="/img/u2.png" alt="" width="600" height="600">
<hr>
@stop
