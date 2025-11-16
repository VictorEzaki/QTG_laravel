<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessaoUsuarioController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function index() {
        return view('categoria');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email', 'max:80', 'string'],
            'senha' => ['required', Password::min(6), 'string'],
        ]);

        if (! Auth::attempt([
            'email' => $validatedAttributes['email'],
            'password' => $validatedAttributes['senha']]
        )) {
            throw ValidationException::withMessages([
                'email' => 'Desculpe, as credenciais não são válidas',
            ]);
        }

        request()->session()->regenerate();

        return redirect('/categoria')->with('success', 'Login realizado com sucesso. Seja bem-vindo!');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'Até mais!');
    }
}
