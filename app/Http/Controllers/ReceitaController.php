<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Cozinha;
use App\Models\Custo;
use App\Models\Dificuldade;
use App\Models\Ingrediente;
use App\Models\Preparo;
use App\Models\Receita;
use App\Models\Refeicao;
use App\Models\Utensilio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReceitaController extends Controller
{
    public function getHome() {
        $ultimasReceitas = Receita::orderBy('created_at', 'desc')->take(5)->get();
        
        return view('home', [
            'ultimasReceitas' => $ultimasReceitas
        ]);
    }

    public function index(Request $request)
    {
        $query = Receita::with(['categorias', 'dificuldade', 'refeicoes']);

        if ($request->filled('categoria')) {
            $query->whereHas('categorias', function ($q) use ($request) {
                $q->where('categoria.id', $request->categoria);
            });
        }

        if ($request->filled('dificuldade')) {
            $query->where('dificuldade_id', $request->dificuldade);
        }

        if ($request->filled('refeicao')) {
            $query->whereHas('refeicoes', function ($q) use ($request) {
                $q->where('refeicao.id', $request->refeicao);
            });
        }

        if ($request->filled('buscar')) {
            $query->where('titulo', 'like', '%'.$request->buscar.'%');
        }

        $receitas = $query->get();

        return view('receita.index', [
            'receitas' => $receitas,
            'categorias' => Categoria::all(),
            'dificuldades' => Dificuldade::all(),
            'refeicoes' => Refeicao::all(),
        ]);
    }

    public function show(Receita $receita)
    {
        return view('receita.show', [
            'receita' => $receita,
        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        $dificuldades = Dificuldade::all();
        $custos = Custo::all();
        $ingredientes = Ingrediente::all();
        $utensilios = Utensilio::all();
        $cozinhas = Cozinha::all();
        $refeicoes = Refeicao::all();

        return view('receita.create', [
            'categorias' => $categorias,
            'dificuldades' => $dificuldades,
            'custos' => $custos,
            'ingredientes' => $ingredientes,
            'utensilios' => $utensilios,
            'cozinhas' => $cozinhas,
            'refeicoes' => $refeicoes,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => ['required', 'string', 'max:255'],
            'descricao' => ['required'],
            'imagem' => ['nullable', 'image'],
            'modo_preparo' => ['required'],
            'tempo_preparo' => ['required'],
            'dificuldade_id' => ['required', 'exists:dificuldade,id'],
            'custo_id' => ['required', 'exists:custo,id'],
            'categorias' => ['required', 'array'],
            'categorias.*' => ['exists:categoria,id'],
            'ingredientes' => ['required', 'array'],
            'ingredientes.*' => ['exists:ingrediente,id'],
            'utensilios' => ['required', 'array'],
            'utensilios.*' => ['exists:utensilio,id'],
            'cozinhas' => ['required', 'array'],
            'cozinhas.*' => ['exists:utensilio,id'],
            'refeicoes' => ['required', 'array'],
            'refeicoes.*' => ['exists:utensilio,id'],
        ]);

        $preparo = Preparo::create([
            'modo_preparo' => $request->modo_preparo,
            'tempo_preparo' => $request->tempo_preparo,
        ]);

        $nomeImagem = null;

        if ($request->hasFile('imagem')) {
            $nomeImagem = $request->file('imagem')->store('receitas', 'public');
        }

        $receita = Receita::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'imagem' => $nomeImagem,
            'usuario_id' => Auth::id(),
            'preparo_id' => $preparo->id,
            'dificuldade_id' => $request->dificuldade_id,
            'custo_id' => $request->custo_id,
        ]);

        $receita->categorias()->sync($request->categorias);
        $receita->ingredientes()->sync($request->ingredientes);
        $receita->utensilios()->sync($request->utensilios);
        $receita->cozinhas()->sync($request->cozinhas);
        $receita->refeicoes()->sync($request->refeicoes);

        return redirect('/receita')->with('success', 'Receita criada com sucesso!');
    }
}
