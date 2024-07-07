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
        Schema::table('notas_fiscais', function (Blueprint $table) {
            $table->foreign(['MATRICULA'], 'notas_fiscais_ibfk_1')->references(['MATRICULA'])->on('tabela_de_vendedores')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['CPF'], 'notas_fiscais_ibfk_2')->references(['CPF'])->on('tabela_de_clientes')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('notas_fiscais', function (Blueprint $table) {
            $table->dropForeign('notas_fiscais_ibfk_1');
            $table->dropForeign('notas_fiscais_ibfk_2');
        });
    }
};
