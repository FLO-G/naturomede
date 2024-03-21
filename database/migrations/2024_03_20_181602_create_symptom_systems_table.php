<?php

use App\Models\Symptom;
use App\Models\System;
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
        Schema::create('symptom_systems', function (Blueprint $table) {
            $table->foreignIdFor(Symptom::class);
            $table->foreignIdFor(System::class);
            $table->primary(['symptom_id', 'system_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('symptom_systems');
    }
};
