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
        Schema::create('plantio_moradors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('morador_id');
            $table->unsignedBigInteger('planta_id');
            $table->unsignedBigInteger('terreno_id');
            $table->integer('quantidade');
            $table->string('status');
            $table->timestamps();

            $table->foreign('morador_id')->references('id')->on('moradores')->onDelete('cascade');
            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('cascade');
            $table->foreign('terreno_id')->references('id')->on('terrenos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantio_moradors');
    }
};
