<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preparo extends Model
{
    protected $table = 'preparo';

    protected $guarded = [];

    public function receitas()
    {
        return $this->hasMany(Receita::class);
    }
}
