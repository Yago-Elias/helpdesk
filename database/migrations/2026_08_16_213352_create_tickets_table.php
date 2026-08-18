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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('descricao');
            $table->string('categoria');
            $table->enum('prioridade', [
                'baixa',
                'media',
                'alta',
                'urgente',
            ]);
            $table->enum('status', [
                'aberto',
                'em_andamento',
                'aguardando_cliente',
                'resolvido',
                'fechado',
            ])->default('aberto');

            $table->foreignId('tenant_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
