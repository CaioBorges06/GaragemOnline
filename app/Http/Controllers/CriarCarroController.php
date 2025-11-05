<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CriarCarroController extends Controller
{

    public function create(){

if (Auth::check()) {

        return view('garagem.add_carro');

    }

        return redirect()->route('admin.login');

}

    public function store(Request $request){

        // Lógica para armazenar o carro no banco de dados

        return redirect()->route('carros');

    }

}