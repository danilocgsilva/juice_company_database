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
        Schema::create('tabela_de_produtos', function (Blueprint $table) {
            $table->string('CODIGO_DO_PRODUTO', 10)->primary();
            $table->string('NOME_DO_PRODUTO', 50)->nullable();
            $table->string('EMBALAGEM', 20)->nullable();
            $table->string('TAMANHO', 10)->nullable();
            $table->string('SABOR', 20)->nullable();
            $table->float('PRECO_DE_LISTA');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabela_de_produtos');
    }
};
