<?php

namespace App\Console\Commands\CriarDados;

use App\Models\Cliente;
use Illuminate\Console\Command;
use App\Models\NotaFiscal;
use Exception;
use Log;
use App\Models\Vendedor;

class CriarNotasFiscaisCommand extends Command
{
    protected $signature = 'app:criar-nota-fiscal {--quantidade=1}';

    protected $description = 'Adiciona nota fiscal no banco (uma ou várias segundo parâmetro)';

    public function __construct()
    {
        if (!$this->existeCliente()) {
            throw new Exception("É preciso ter alguma cliente cadastrado antes de criar uma nota fiscal.");
        }

        if (!$this->existeVendedor()) {
            throw new Exception("É preciso ter algum vendedor antes de gerar alguma nota fiscal.");
        }
        
        parent::__construct();
    }

    public function handle()
    {
        for ($i = 0; $i < ($quantidadeGerada = (int) $this->option('quantidade')); $i++) {
            NotaFiscal::factory()->create();
        }
        Log::info(sprintf("Quantidade de notas fiscais criadas: %s", $quantidadeGerada));
    }

    private function existeCliente(): bool
    {
        return (bool) Cliente::count();
    }

    private function existeVendedor(): bool
    {
        return (bool) Vendedor::count();
    }
}
