<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index() {
        $categorias = Categoria::all();

        return view('categoria.index', [
            'categorias' => $categorias
        ]);
    }

    public function create() {
        return view('categoria.create');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'categoria' => ['required', 'max:80']
        ]);

        $validatedAttributes['ativo'] = request()->has('ativo') ? 1 : 0;

        Categoria::create($validatedAttributes);

        return redirect('/categoria')->with('success', 'Categoria cadastrada com sucesso!');
    }
}
