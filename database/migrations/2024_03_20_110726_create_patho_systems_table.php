<?php

use App\Models\Patho;
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
        Schema::create('patho_systems', function (Blueprint $table) {
            $table->foreignIdFor(Patho::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(System::class)->constrained()->cascadeOnDelete();
            $table->primary(['patho_id', 'system_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patho_systems');
    }
};
