<?php

use App\Models\Patho;
use App\Models\Symptom;
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
        Schema::create('patho_symptoms', function (Blueprint $table) {
            $table->foreignIdFor(Patho::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Symptom::class)->constrained()->cascadeOnDelete();
            $table->primary(['patho_id', 'symptom_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patho_symptoms');
    }
};
