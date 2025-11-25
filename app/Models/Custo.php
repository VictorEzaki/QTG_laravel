<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Custo extends Model
{
    protected $table = 'custo';

    protected $guarded = [];

    public function receitas()
    {
        return $this->hasMany(Receita::class);
    }
}
