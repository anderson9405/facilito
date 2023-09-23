<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::user()->role->name =='Administrador'){
            return view('dashboard-admin');
        }else if(Auth::user()->role->name =='Vendedor'){
            return view('dashboard-seller');
        }else if(Auth::user()->role->name =='Cliente'){
            return view('dashboard-customer');
        }
    }
}
