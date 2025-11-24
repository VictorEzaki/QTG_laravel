<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dificuldade extends Model
{
    protected $table = 'dificuldade';

    protected $guarded = [];

    public function receitas()
    {
        return $this->hasMany(Receita::class);
    }
}
