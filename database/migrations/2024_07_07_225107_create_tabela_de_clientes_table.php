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
        Schema::create('tabela_de_clientes', function (Blueprint $table) {
            $table->string('CPF', 11)->primary();
            $table->string('NOME', 100)->nullable();
            $table->string('ENDERECO_1', 150)->nullable();
            $table->string('ENDERECO_2', 150)->nullable();
            $table->string('BAIRRO', 50)->nullable();
            $table->string('CIDADE', 50)->nullable();
            $table->string('ESTADO', 2)->nullable();
            $table->string('CEP', 8)->nullable();
            $table->date('DATA_DE_NASCIMENTO')->nullable();
            $table->smallInteger('IDADE')->nullable();
            $table->string('SEXO', 1)->nullable();
            $table->float('LIMITE_DE_CREDITO')->nullable();
            $table->float('VOLUME_DE_COMPRA')->nullable();
            $table->boolean('PRIMEIRA_COMPRA')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabela_de_clientes');
    }
};
