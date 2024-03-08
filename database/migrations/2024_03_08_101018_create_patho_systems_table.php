<?php

use App\Models\Patho;
use App\Models\System;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patho_systems', function (Blueprint $table) {
            $table->foreignIdFor(Patho::class);
            $table->foreignIdFor(System::class);
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
