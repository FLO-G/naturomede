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
            $table->foreignIdFor(Patho::class);
            $table->foreignIdFor(Symptom::class);
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
