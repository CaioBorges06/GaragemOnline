<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CriarCarroController;


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

Route::get('/carros', function(){

    return view('garagem.carros');

})->name('carros'); // rota para a pagina de carros

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

/* -----------------------------------  ROTAS LOGIN  ---------------------------------------------  */

Route::get('/admin/carro/adicionar', [CriarCarroController::class, 'create'])
    ->name('form.carro');

Route::post('/admin/carro/validar/', [CriarCarroController::class, 'create'])
    ->name('validar.carro');


require __DIR__.'/auth.php';
