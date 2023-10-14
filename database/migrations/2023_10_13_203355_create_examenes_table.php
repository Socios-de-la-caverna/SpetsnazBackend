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
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->string('discord_id', 30);
            $table->string('nombre', 30);
            $table->string('datos', 200);
            $table->string('primera_pregunta', 400);
            $table->string('segunda_pregunta', 400);
            $table->string('tercera_pregunta', 400);
            $table->string('cuarta_pregunta', 400);
            $table->string('fecha', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes');
    }
};
