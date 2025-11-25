<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{
    protected $table = 'cozinha';

    protected $guarded = [];

    public function receitas() {
        return $this->belongsToMany(Receita::class, 'cozinha_receita', 'cozinha_id', 'receita_id');
    }
}
