<?php

use App\Models\Ingrediente;
use App\Models\Receita;
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
        Schema::create('ingrediente_receita', function (Blueprint $table) {
            $table->id();
            $table->float(8,10);
            $table->foreignIdFor(Receita::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Ingrediente::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingrediente_receita');
    }
};
