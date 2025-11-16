<?php

namespace App\Http\Controllers;

use App\Models\Refeicao;
use Illuminate\Http\Request;

class RefeicaoController extends Controller
{
    public function create() {
        return view('refeicao');
    }

    public function store() {
        $validatedAttributes = request()->validate([
            'refeicao' => ['required', 'max:65']
        ]);

        $validatedAttributes['ativo'] = request()->has('ativo') ? 1 : 0;

        Refeicao::create($validatedAttributes);

        return redirect('/refeicao')->with('success', 'Refeição cadastrada com sucesso!');
    }
}
