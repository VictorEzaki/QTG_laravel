<?php

namespace Database\Seeders;

use App\Models\Refeicao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RefeicaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Refeicao::factory(100)->create();
    }
}
