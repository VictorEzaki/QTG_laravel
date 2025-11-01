<?php

namespace Database\Seeders;

use App\Models\Receita;
use App\Models\Refeicao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReceitaRefeicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $refeicoes = Refeicao::all();

        Receita::all()->each(function ($receita) use ($refeicoes) {
            $receita->refeicoes()->attach(
                $refeicoes->random(rand(1,2))->pluck('id')->toArray()
            );
        });
    }
}
