<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home(){
        return view('home');
    }

    public function consultaorden(){
        return view('consultaorden');
    }
    
    public function funcionamiento(){
        return view('funcionamiento');
    }

    public function nosotros(){
        return view('nosotros');
    }

    public function reparacion(){
        return view('reparacion');
    }

    public function tecnicos(){
        return view('tecnicos');
    }

    public function clienteInicio(){
        if(Auth::user()->typeUser=='Usuario'){
        return view('clientes.inicio');
        }
    }

    public function tecnicoInicio(){
        if(Auth::user()->typeUser=='Tecnico'){
            return view('tecnicos.inicio');
        }
    }

    public function registertech(){
        return view('auth.registertech');
    }

    public function clienteMenu_servicios(){
        if(Auth::user()->typeUser=='Usuario'){
            return view('clientes.menu_servicios');
        }
    }

    public function list_technician(){
        if(Auth::user()->typeUser=='Usuario'){
            return view('clientes.index');
        }
    }

    public function serviceSummary(){
        return view('serviceOrder.serviceSummary');
    }

    public function indexService(){
        return view('serviceOrder.indexService');
    }

}
