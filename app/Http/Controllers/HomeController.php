<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Models\Technician_profiles;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $foreign_id_technician= Technician_profiles::find(Auth::user()->id);

        if(Auth::user()->typeUser=='Usuario'){
            return redirect()->route('home-Customers');
        }
        elseif(is_null($foreign_id_technician)){

            return redirect()->route('register-Technician.create');
         }
        elseif(Auth::user()->id==$foreign_id_technician->technician_id){

           return redirect()->route('home-Technician');
        }
    }
}
