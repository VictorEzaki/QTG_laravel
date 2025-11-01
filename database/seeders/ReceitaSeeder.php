<?php

namespace Database\Seeders;

use App\Models\Receita;
use App\Models\Usuario;
use Illuminate\Database\Seeder;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuarios = Usuario::all();

        foreach ($usuarios as $usuario) {
            // Cada usuário cria entre 1 e 5 receitas
            Receita::factory(rand(1, 5))->create([
                'usuario_id' => $usuario->id,
            ]);
        }
    }
}
