<?php

use App\Models\Receita;
use App\Models\Utensilio;
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
        Schema::create('receita_utensilio', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Receita::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Utensilio::class)->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receita_utensilio');
    }
};
