<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriaFactory> */
    use HasFactory;

    protected $table = 'categoria';

    protected $guarded = [];

    public function receitas()
    {
        return $this->belongsToMany(Receita::class, 'categoria_receita', foreignPivotKey: 'receita_id');
    }
}
