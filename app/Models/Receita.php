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
        return $this->belongsToMany(Categoria::class, 'receita_categoria', foreignPivotKey: 'categoria_id');
    }

    public function refeicoes()
    {
        return $this->belongsToMany(Refeicao::class, 'receita_refeicao', foreignPivotKey: 'refeicao_id');
    }
}
