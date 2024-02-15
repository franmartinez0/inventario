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
        Schema::create('localizacions', function (Blueprint $table) {
            $table->id();
            $table->string('ciudad');
            $table->string('nombre_edificio');
            $table->string('direccion_edificio');
            $table->string('numero de sala');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localizacions');
    }
};
