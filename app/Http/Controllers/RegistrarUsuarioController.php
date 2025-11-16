<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Validation\Rules\Password;

class RegistrarUsuarioController extends Controller
{
    public function create() {
        return view('auth.registrar');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'nome' => ['required', 'max:60', 'string'],
            'email' => ['required', 'email', 'max:80', 'unique:usuario,email', 'string'],
            'dt_nascimento' => ['nullable', 'date'],
            'cep' => ['nullable', 'integer'],
            'genero' => ['nullable', 'in:0,1'],
            'senha' => ['required', Password::min(6), 'string'],
        ]);

        $validatedAttributes['dt_inscrito'] = now();

        Usuario::create($validatedAttributes);

        return redirect('/')->with('success', 'Cadastro realizado com sucesso!');
    }
}
