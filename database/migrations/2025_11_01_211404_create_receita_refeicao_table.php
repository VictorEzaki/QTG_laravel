<?php

use App\Models\Receita;
use App\Models\Refeicao;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('receita_refeicao', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Receita::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Refeicao::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receita_refeicao');
    }
};
