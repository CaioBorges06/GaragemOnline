<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // Exibe o formulário de login
    public function showLoginForm()
    {
        return view('admin.login'); // o seu Blade com o HTML que você enviou
    }

    // Processa o login
    public function login(Request $request)
    {
        // valida os campos
        $credentials = $request->validate([
            'usuario' => ['required', 'string'],
            'senha' => ['required', 'string'],
        ]);

        // tenta autenticar
        if (Auth::attempt(['email' => $credentials['usuario'], 'password' => $credentials['senha']])) {
            $request->session()->regenerate(); // previne fixation attacks
            return redirect()->route('admin.dashboard');
        }

        // se falhar, retorna com erro
        return back()->withErrors([
            'usuario' => 'Usuário ou senha incorretos.',
        ])->onlyInput('usuario');
    }

    // Faz logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
