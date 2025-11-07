<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carros;

class MostrarEditarCarro extends Controller
{
    
    public function mostrar(){

    if (Auth::check()) {

        $carros = Carros::all(); // pega todos os carros
        return view('garagem.carros',compact('carros'));

    }

        return redirect()->route('admin.login');

    }

    public function detalhes($id){

        $carro = Carros::find($id); // pega o carro pelo id

        if (Auth::check()) {

            return view('garagem.detalhes_admin',compact('carro'));

        }

            return view('garagem.detalhes_pub',compact('carro'));

    }
/*
    public function editar($id){

        if (Auth::check()) {

            $carro = Carros::find($id); // pega o carro pelo id
            return view('garagem.editar_carro',compact('carro'));

        }

            return redirect()->route('admin.login');

    }
*/
}
