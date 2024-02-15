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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('modelo');
            $table->string('fabricante');
            $table->string('descripcion');
            $table->integer('stock');
            $table->enum('estado', ['Activo', 'Roto', 'Desaparecido'])->default('Activo');
            $table->unsignedBigInteger('localizacion_id')->nullable();
            $table->foreign('localizacion_id')->references('id')->on('localizacions')->onDelete('set Null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
