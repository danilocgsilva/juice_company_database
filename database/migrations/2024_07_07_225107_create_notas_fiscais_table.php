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
        Schema::create('notas_fiscais', function (Blueprint $table) {
            $table->string('CPF', 11)->index('cpf');
            $table->string('MATRICULA', 5)->index('matricula');
            $table->date('DATA_VENDA')->nullable();
            $table->integer('NUMERO')->primary();
            $table->float('IMPOSTO');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas_fiscais');
    }
};
