<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carros;

class MostrarEditarCarro extends Controller
{
    
    public function mostrar(){

        $carros = Carros::all(); // pega todos os carros
        return view('garagem.carros',compact('carros'));

    }

        public function detalhes($id)
    {
        $carro = Carros::find($id);

        // Se o carro não for encontrado
        if (!$carro) {
            abort(404, 'Carro não encontrado');
        }

        if (Auth::check()) {
            return view('garagem.detalhes_admin', compact('carro'));
        }

        return view('garagem.detalhes_pub', compact('carro'));
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
