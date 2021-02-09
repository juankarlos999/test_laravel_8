<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Models\User;
use App\Models\Role;

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
        $user = User::find(Auth::user()->id);
        $rol_user = User::find(Auth::user()->id);
        $rol_user->roles()->role_id;

        if(is_null($user->address)){
            return view('auth.register');
        }elseif($rol_user->roles()->role_id == 1){
            return view('students.inicio');
        }elseif($rol_user->roles()->role_id == 2){
            return view('administrator.inicio');
        }
    }
}
