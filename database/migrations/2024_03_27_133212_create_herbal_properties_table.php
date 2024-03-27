<?php

use App\Models\Herbal;
use App\Models\HrbProperty;
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
        Schema::create('herbal_properties', function (Blueprint $table) {
            $table->foreignIdFor(Herbal::class);
            $table->foreignIdFor(HrbProperty::class);
            $table->primary(['herbal_id', 'hrb_property_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('herbal_properties');
    }
};
