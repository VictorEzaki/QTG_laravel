<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    /** @use HasFactory<\Database\Factories\RefeicaoFactory> */
    use HasFactory;

    protected $table = 'refeicao';

    protected $guarded = [];

    public function receitas()
    {
        return $this->belongsToMany(Receita::class, 'receita_refeicao', 'refeicao_id', 'receita_id');
    }
}
