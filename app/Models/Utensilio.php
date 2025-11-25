<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Utensilio extends Model
{
    protected $table = 'utensilio';

    protected $guarded = [];

    public function receitas() {
        return $this->belongsToMany(Receita::class, 'receita_utensilio', 'utensilio_id', 'receita_id');
    }
}
