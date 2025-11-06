<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categorias;

class ControllerCategoria extends Controller
{
    public function create(){

        if (Auth::check()) {

        return view('garagem.criar_categoria');

    }

        return redirect()->route('admin.login');

    }

    public function store(Request $request){

        $validator = $request->validate(
    ['categoria' => 'required|string|max:30|unique:categorias,categoria'],
    [
        'categoria.required' => 'O campo nome é obrigatório.',
        'categoria.unique' => 'Esta categoria já existe.',
        'categoria.max' => 'O nome da categoria não pode exceder 30 caracteres.',
        'categoria.string' => 'O nome da categoria deve ser uma string.'
    ]
);


    $categoria = new Categorias();
    $categoria->categoria = $request->input('categoria');
    $categoria->save();



        return redirect()->route('inicio')->with('success', 'Categoria criada com sucesso!');



    }

}
