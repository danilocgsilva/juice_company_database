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
        Schema::create('tabela_de_vendedores', function (Blueprint $table) {
            $table->string('MATRICULA', 5)->primary();
            $table->string('NOME', 100)->nullable();
            $table->float('PERCENTUAL_COMISSAO')->nullable();
            $table->date('DATA_ADMISSAO')->nullable();
            $table->boolean('DE_FERIAS')->nullable();
            $table->string('BAIRRO', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tabela_de_vendedores');
    }
};
