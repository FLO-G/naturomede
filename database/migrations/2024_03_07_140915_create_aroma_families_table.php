<?php

use App\Models\Aroma;
use App\Models\Family;
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
        Schema::create('aroma_families', function (Blueprint $table) {
            $table->foreignIdFor(Aroma::class);
            $table->foreignIdFor(Family::class);
            $table->primary(['aroma_id', 'family_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aroma_families');
    }
};
