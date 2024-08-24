<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Log;

class PerfilDadosCommand extends Command
{
    protected $signature = 'app:perfil-dados {--banco-de-dados=}';

    protected $description = 'Mostra o perfil de dados';

    public function handle()
    {
        if (($databaseName = $this->option('banco-de-dados'))) {
            config([
                'database.connections.mysql.database' => $databaseName
            ]);
            DB::reconnect();
        }
        $stringToLog = PHP_EOL;
        $stringToLog .= sprintf("Nome do banco de dados: %s" . PHP_EOL, $this->option('banco-de-dados') ?? env("DB_DATABASE"));
        $stringToLog .= "Tabelas: " . PHP_EOL;
        foreach (config('app.tabelas') as $tabela) {
            $tabelaDados = $this->buscarDadosTabelas($tabela);
            $stringToLog .= 
                " * " . $tabelaDados['nome'] . 
                " - " .
                $tabelaDados['quantidade'] . 
                PHP_EOL
            ;
        }
        Log::info($stringToLog);
    }

    private function buscarDadosTabelas(string $tabela): array
    {
        return [
            'nome' => $tabela,
            'quantidade' => $this->buscarQuantidadeTabela($tabela)
        ];
    }

    private function buscarQuantidadeTabela(string $tabela): int
    {
        return DB::table($tabela)->count();
    }
}
