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
        
        Schema::create('plantios', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('morador_id');
            $table->foreign('morador_id')
            ->references('id')
            ->on("moradors")
            ->onDelete("restrict");

            $table->unsignedBigInteger('planta_id');
            $table->foreign('planta_id')
            ->references('id')
            ->on('plantas')
            ->onDelete('restrict');

            $table->unsignedBigInteger('terreno_id');
            $table->foreign('terreno_id')
            ->references('id')
            ->on("terrenos")
            ->onDelete('restrict');

            $table->date('data_plantio');
            $table->date('data_colheita');
            $table->string('status');
            $table->timestamps();
           
           
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantios');
    }
};
