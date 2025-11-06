<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorias;
use App\Models\Carros;

class CriarCarroController extends Controller
{

    public function create(){

if (Auth::check()) {

         $categorias = Categorias::all(); // pega todas as categorias
        return view('garagem.add_carro',compact('categorias'));

    }

        return redirect()->route('admin.login');

}

    public function store(Request $request){

        // Lógica para armazenar o carro no banco de dados

        return redirect()->route('carros');

    }

}