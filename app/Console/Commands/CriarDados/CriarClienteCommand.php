<?php

namespace App\Console\Commands\CriarDados;

use Illuminate\Console\Command;
use App\Models\Cliente;

class CriarClienteCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:criar-cliente {--quantidade=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 0; $i < (int) $this->option('quantidade'); $i++) {
            /** @var Cliente */
            $cliente = Cliente::factory()->create();
            print($cliente->getNome() . " criado." . PHP_EOL);
        }
    }
}
