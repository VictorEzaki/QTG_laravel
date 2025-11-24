<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    /** @use HasFactory<\Database\Factories\ReceitaFactory> */
    use HasFactory;

    protected $table = 'receita';

    protected $guarded = [];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'receita_categoria', 'receita_id', 'categoria_id');
    }

    public function refeicoes()
    {
        return $this->belongsToMany(Refeicao::class, 'receita_refeicao', 'receita_id', 'refeicao_id');
    }

    public function ingredientes()
    {
        return $this->belongsToMany(Ingrediente::class, 'ingrediente_receita', 'receita_id', 'ingrediente_id');
    }

    public function utensilios()
    {
        return $this->belongsToMany(Utensilio::class, 'receita_utensilio', 'receita_id', 'utensilio_id');
    }

    public function cozinhas()
    {
        return $this->belongsToMany(Cozinha::class, 'cozinha_receita', 'receita_id', 'cozinha_id');
    }

    public function custo()
    {
        return $this->belongsTo(Custo::class);
    }

    public function dificuldade()
    {
        return $this->belongsTo(Dificuldade::class);
    }

    public function preparo()
    {
        return $this->belongsTo(Preparo::class);
    }
}
