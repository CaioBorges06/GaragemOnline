<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Categorias;
use App\Models\Cor;
use App\Models\Marca;
use App\Models\Modelo;

class ControllerCategoria extends Controller
{
    public function create(){

        if (Auth::check()) {

        return view('garagem.cadastrar_itens');

    }

        return redirect()->route('admin.login');

    }

    public function validarCategoria(Request $request){

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

        return redirect()->route('inicio')->with('success', 'Categoria cadastrada com sucesso!');


    }

    public function validarCor(Request $request){

        $validator = $request->validate(
    ['cor' => 'required|string|max:30|unique:cores,cor'],
    [
        'cor.required' => 'O campo nome é obrigatório.',
        'cor.unique' => 'Esta cor já existe.',
        'cor.max' => 'O nome da cor não pode exceder 30 caracteres.',
        'cor.string' => 'O nome da cor deve ser uma string.'
    ]
);

    $cor = new Cor();
    $cor->cor = $request->input('cor');
    $cor->save();

    return redirect()->route('inicio')->with('success', 'Cor cadastrada com sucesso!');

}

    public function validarMarca(Request $request){

        $validator = $request->validate(
    ['marca' => 'required|string|max:30|unique:marcas,marca'],
    [
        'marca.required' => 'O campo nome é obrigatório.',
        'marca.unique' => 'Esta marca já existe.',
        'marca.max' => 'O nome da marca não pode exceder 30 caracteres.',
        'marca.string' => 'O nome da marca deve ser uma string.'
    ]
);

    $marca = new Marca();
    $marca->marca = $request->input('marca');
    $marca->save();

    return redirect()->route('inicio')->with('success', 'marca cadastrada com sucesso!');

}

    public function validarModelo(Request $request){

        $validator = $request->validate(
    ['modelo' => 'required|string|max:30|unique:modelos,modelo'],
    [
        'modelo.required' => 'O campo nome é obrigatório.',
        'modelo.unique' => 'Este modelo já existe.',
        'modelo.max' => 'O nome do modelo não pode exceder 30 caracteres.',
        'modelo.string' => 'O nome do modelo deve ser uma string.'
    ]
);

    $modelo = new Modelo();
    $modelo->modelo = $request->input('modelo');
    $modelo->save();

    return redirect()->route('inicio')->with('success', 'Modelo cadastrado com sucesso!');

}

}
