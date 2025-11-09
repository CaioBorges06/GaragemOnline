<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Carros;
use App\Models\Categorias;

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

    public function pesquisar(Request $request)
{
    $termo = $request->input('termo');

    // Campo de pesquisa vazio
    if (empty($termo)) {
        $carros = Carros::all();
        $mensagem = 'Digite algo para pesquisar.';
        $estado = 'vazio';
    } 
    else {
        // Campo preenchido - faz a busca
        $carros = Carros::where('modelo', 'LIKE', '%' . $termo . '%')
                        ->orWhere('marca', 'LIKE', '%' . $termo . '%')
                        ->orWhere('categoria', 'LIKE', '%' . $termo . '%')
                        ->get();

        // Nenhum resultado encontrado
        if ($carros->isEmpty()) {
            $mensagem = "Nenhum carro encontrado para '{$termo}'.";
            $estado = 'sem_resultado';
        } 
        else {
            // Resultados encontrados
            $mensagem = count($carros) . " resultado(s) encontrado(s) para '{$termo}'.";
            $estado = 'encontrado';
        }
    }

    return view('garagem.pesquisa', compact('carros', 'termo', 'mensagem', 'estado'));
}


    public function editar($id){

        if (Auth::check()) {

            $categorias = Categorias::all(); // pega todas as categorias
            $carro = Carros::find($id); // pega o carro pelo id
            return view('garagem.editar_carro',compact('carro','categorias'));

        }

            return redirect()->route('admin.login');

    }

    public function atualizar(Request $request, $id){

        if (Auth::check()) {

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

        // Criação e salvamento do carro
        $carro = Carros::find($id);
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
        $carro->update();

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('carros.detalhes',['id' => $carro->id])->with('success', 'Carro atualizado com sucesso!');

        }

            return redirect()->route('admin.login');

    }

    public function deletar($id){

        if (Auth::check()) {

            $carro = Carros::find($id); // pega o carro pelo id
            $carro->delete(); // deleta o carro

            return redirect()->route('carros')->with('success', 'Carro deletado com sucesso!');

        }

            return redirect()->route('admin.login')->with('error', 'Você precisa estar logado como administrador para deletar um carro.');

    }

}
