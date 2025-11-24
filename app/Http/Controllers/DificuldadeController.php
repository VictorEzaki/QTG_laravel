<?php

namespace App\Http\Controllers;

use App\Models\Dificulade;
use App\Models\Dificuldade;
use Illuminate\Http\Request;

class DificuldadeController extends Controller
{
    public function create() {
        return view('dificuldade.create');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'dificuldade' => ['required', 'max:45', 'string']
        ]);

        Dificuldade::create($validatedAttributes);

        return redirect('/dificuldade')->with('success', 'dificuldade cadastrada com sucesso!');
    }
}
