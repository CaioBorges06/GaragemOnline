<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        try {
        // Tenta autenticar o usuário com os dados do formulário
        $request->authenticate();

        // Regenera a sessão para evitar problemas de sessão fixada
        $request->session()->regenerate();

        // Se der certo, redireciona para a rota de início (ou dashboard)
        return redirect()->route('inicio');

        } catch (ValidationException $e) {
        // Se der erro, volta para o login com a mensagem de erro
        return back()
            ->withErrors(['login_error' => 'Usuário ou senha inválidos'])
            ->withInput($request->only('name'));
    }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('inicio');
    }
}
