<?php

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
    Schema::create('clients', function (Blueprint $table) {
        $table->id();
        $table->string('firstname');
        $table->string('lastname');
        $table->string('email');
        //$table->foreignId('gender_id');
        $table->foreignId('gender_id')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};