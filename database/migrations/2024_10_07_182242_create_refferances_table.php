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
        Schema::create('refferances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reffromref_from_id');
            $table->unsignedBigInteger('reffromref_to_id');
            $table->unsignedBigInteger('amount');
            $table->unsignedSmallInteger('month');
            $table->unsignedSmallInteger('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refferances');
    }
};
