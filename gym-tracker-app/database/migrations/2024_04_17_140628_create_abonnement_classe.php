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
        Schema::create('abonnement_classe', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('classe_id');
            $table->bigInteger('abonnement_id');

            $table->foreign('classe_id')->references('id')->on('classes');
            $table->foreign('abonnement_id')->references('id')->on('abonnement');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abonnement_classe');
    }
};
