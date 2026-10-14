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
    Schema::create('ufs', function (Blueprint $table) {
    $table->id();

    $table->date('fecha')->unique();
    $table->decimal('valor', 12, 2);

    $table->string('fuente')->default('Banco Central de Chile');
    $table->string('codigo')->default('UF');

    $table->timestamp('consultado_at')->nullable();

    $table->timestamps();
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ufs');
    }
};
