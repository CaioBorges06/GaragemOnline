<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    
    public function verificarLogin()
{
    if (Auth::check()) {

        return view('garagem.inicio_admin');

    }

        return view('garagem.inicio_pub');

}

}
    
    


