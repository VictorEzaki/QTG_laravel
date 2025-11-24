<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = 'ingrediente';

    protected $guarded = [];

    public function receitas() {
        return $this->belongsToMany(Receita::class, 'ingrediente_receita', 'ingrediente_id', 'receita_id');
    }
}
