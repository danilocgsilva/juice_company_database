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
        Schema::table('itens_notas_fiscais', function (Blueprint $table) {
            $table->foreign(['CODIGO_DO_PRODUTO'], 'itens_notas_fiscais_ibfk_1')->references(['CODIGO_DO_PRODUTO'])->on('tabela_de_produtos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['NUMERO'], 'itens_notas_fiscais_ibfk_2')->references(['NUMERO'])->on('notas_fiscais')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itens_notas_fiscais', function (Blueprint $table) {
            $table->dropForeign('itens_notas_fiscais_ibfk_1');
            $table->dropForeign('itens_notas_fiscais_ibfk_2');
        });
    }
};
