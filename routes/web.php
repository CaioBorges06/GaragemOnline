<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CriarCarroController;
use App\Http\Controllers\ControllerCategoria;
use App\Http\Controllers\MostrarEditarCarro;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* -----------------------------------  ROTAS INICIO  ---------------------------------------------  */ 

Route::get('/inicio', 

        [InicioController::class,'verificarLogin']

)->name('inicio'); // rota para o inicio



/* ------------------------------------------------------------------------------------------------  */ 

/* -----------------------------------  ROTAS CARROS  ---------------------------------------------  */

Route::get('/carros', [MostrarEditarCarro::class,'mostrar'])->name('carros'); // rota para a pagina de carros

Route::get('/carros/detalhes/{id}', [MostrarEditarCarro::class,'detalhes'])->name('carros.detalhes'); // rota para editar carro

Route::post('/carros/pesquisar', [MostrarEditarCarro::class,'pesquisar'])->name('carros.pesquisar'); // rota para pesquisar carro

Route::get('/adm/carros/editar/{id}', [MostrarEditarCarro::class,'editar'])->name('carros.editar'); // rota para pesquisar carro via get

Route::post('/adm/carros/atualizar/{id}', [MostrarEditarCarro::class,'atualizar'])->name('atualizar.carro'); // rota para atualizar carro via post

Route::get('/adm/carros/deletar/{id}', [MostrarEditarCarro::class,'deletar'])->name('carros.deletar'); // rota para deletar carro via get

/* ------------------------------------------------------------------------------------------------  */

/* -----------------------------------  ROTAS LOGIN  ---------------------------------------------  */

// Página de login customizada
Route::get('/admin/login', [AuthenticatedSessionController::class, 'create'])
    ->name('admin.login');

// Envio do formulário
Route::post('/admin/login', [AuthenticatedSessionController::class, 'store'])
    ->name('admin.login.post');

// Logout
Route::post('/admin/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('admin.logout');

// Página protegida após login
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');


/* ------------------------------------------------------------------------------------------------  */

/* -----------------------------------  ROTAS ADICIONAR CARRO  --------------------------------  */

Route::get('/admin/carro/adicionar', [CriarCarroController::class, 'create'])
    ->name('form.carro');

Route::post('/admin/carro/validar/', [CriarCarroController::class, 'store'])
    ->name('validar.carro');

/* ------------------------------------------------------------------------------------------------  */

/* -----------------------------------  ROTAS ADICIONAR ITENS  ------------------------------------  */

Route::get('/admin/itens/cadastrar',[ControllerCategoria::class,'create'])
->name('form.itens'); // rota para o formulario de criar categoria

Route::post('/admin/categoria/validar',[ControllerCategoria::class,'validarCategoria'])
->name('validar.categoria'); // rota para validar a criação da categoria

Route::post('/admin/cor/validar',[ControllerCategoria::class,'validarCor'])
->name('validar.cor'); // rota para o formulario de criar categoria

Route::post('/admin/marca/validar',[ControllerCategoria::class,'validarMarca'])
->name('validar.marca'); // rota para o formulario de criar categoria

Route::post('/admin/modelo/validar',[ControllerCategoria::class,'validarModelo'])
->name('validar.modelo'); // rota para o formulario de criar categoria





require __DIR__.'/auth.php';
