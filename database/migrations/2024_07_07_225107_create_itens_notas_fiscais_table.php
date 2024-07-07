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
        Schema::create('itens_notas_fiscais', function (Blueprint $table) {
            $table->integer('NUMERO');
            $table->string('CODIGO_DO_PRODUTO', 10)->index('codigo_do_produto');
            $table->integer('QUANTIDADE');
            $table->float('PRECO');

            $table->primary(['NUMERO', 'CODIGO_DO_PRODUTO']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_notas_fiscais');
    }
};
