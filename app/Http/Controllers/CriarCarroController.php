<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Categorias;
use App\Models\Carros;
use App\Models\Cor;
use App\Models\Marca;
use App\Models\Modelo;

class CriarCarroController extends Controller
{

    public function create(){

if (Auth::check()) {

        $categorias = Categorias::all(); // pega todas as categorias
        $cor = Cor::all(); // pega todas as cores
        $marca = Marca::all(); // pega todas as marcas
        $modelo = Modelo::all(); // pega todos os modelos
        return view('garagem.add_carro',compact('categorias','cor','marca','modelo'));

    }

        return redirect()->route('admin.login');

}

public function store(Request $request)
{
    // Validação dos campos
    $validator = $request->validate(
        [
            'categoria' => 'required|string|max:30',
            'modelo'    => 'required|string|max:40',
            'marca'     => 'required|string|max:40',
            'cor'       => 'required|string|max:30',
            'ano'       => 'required|integer|min:1900|max:' . date('Y'),
            'km'        => 'required|integer|min:0',
            'valor'     => 'required|numeric|min:0',
            'detalhes'  => 'required|string',
            'fotoUm'    => 'required|url',
            'fotoDois'  => 'nullable|url',
            'fotoTres'  => 'nullable|url',
        ],
        [
            'categoria.required' => 'O campo categoria é obrigatório.',
            'categoria.string'   => 'A categoria deve ser um texto.',
            'categoria.max'      => 'A categoria não pode exceder 30 caracteres.',

            'modelo.required' => 'O campo modelo é obrigatório.',
            'modelo.string'   => 'O modelo deve ser um texto.',
            'modelo.max'      => 'O modelo não pode exceder 40 caracteres.',

            'marca.required' => 'O campo marca é obrigatório.',
            'marca.string'   => 'A marca deve ser um texto.',
            'marca.max'      => 'A marca não pode exceder 40 caracteres.',

            'cor.required' => 'O campo cor é obrigatório.',
            'cor.string'   => 'A cor deve ser um texto.',
            'cor.max'      => 'A cor não pode exceder 30 caracteres.',

            'ano.required' => 'O campo ano é obrigatório.',
            'ano.integer'  => 'O ano deve ser um número inteiro.',
            'ano.min'      => 'O ano deve ser maior ou igual a 1900.',
            'ano.max'      => 'O ano não pode ser maior que o atual.',

            'km.required' => 'O campo quilometragem é obrigatório.',
            'km.integer'  => 'A quilometragem deve ser um número inteiro.',
            'km.min'      => 'A quilometragem deve ser positiva.',

            'valor.required' => 'O campo valor é obrigatório.',
            'valor.numeric'  => 'O valor deve ser numérico.',
            'valor.min'      => 'O valor não pode ser negativo.',

            'detalhes.required' => 'O campo detalhes é obrigatório.',
            'detalhes.string'   => 'Os detalhes devem ser um texto.',

            'fotoUm.required' => 'O link da Foto 1 é obrigatório.',
            'fotoUm.url'      => 'O link da Foto 1 deve ser uma URL válida.',

            'fotoDois.url'    => 'O link da Foto 2 deve ser uma URL válida.',
            'fotoTres.url'    => 'O link da Foto 3 deve ser uma URL válida.',
        ]
    );

    // 🔹 Criação e salvamento do carro
    $carro = new Carros();
    $carro->categoria = $request->categoria;
    $carro->modelo    = $request->modelo;
    $carro->marca     = $request->marca;
    $carro->cor       = $request->cor;
    $carro->ano       = $request->ano;
    $carro->km        = $request->km;
    $carro->valor     = $request->valor;
    $carro->detalhes  = $request->detalhes;
    $carro->fotoUm    = $request->fotoUm;
    $carro->fotoDois  = $request->fotoDois;
    $carro->fotoTres  = $request->fotoTres;
    $carro->save();

    // 🔹 Redirecionamento com mensagem de sucesso
    return redirect()->route('inicio')->with('success', 'Carro cadastrado com sucesso!');
}


}