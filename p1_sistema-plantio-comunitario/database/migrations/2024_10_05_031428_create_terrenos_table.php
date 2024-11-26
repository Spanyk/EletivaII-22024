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
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id();
        $table->string('localizacao');
        $table->decimal('tamanho_m2', 8, 2);
        $table->string('tipo_uso');
        $table->unsignedBigInteger('morador_id');
        $table->foreign('morador_id')->references('id')->on('moradores')->onDelete('cascade');
        $table->string('status');
        $table->timestamps();
       
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('terrenos');
    }
};
