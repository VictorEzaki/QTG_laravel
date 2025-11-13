<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    use HasFactory;

    protected $table = 'ingrediente';

    protected $guarded = [];

    public function receitas() {
        return $this->belongsToMany(Receita::class, 'ingrediente_receita', 'ingrediente_id', 'receita_id');
    }
}
