<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Receita;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceitaCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = Categoria::all();

        Receita::all()->each(function ($receita) use ($categorias) {
            $receita->categorias()->attach(
            $categorias->random(rand(1,3))->pluck('id')->toArray());
        });

    }
}
