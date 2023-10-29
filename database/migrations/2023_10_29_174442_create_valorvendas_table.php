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
        Schema::create('valorvendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cardapio_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('prato_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade')->unique();
            $table->string('valor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('valorvendas');
    }
};
