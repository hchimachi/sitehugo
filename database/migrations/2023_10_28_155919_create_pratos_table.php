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
        Schema::create('pratos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cardapio_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('ingredientes');
            $table->foreignId('tipo_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nome');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pratos');
    }
};
