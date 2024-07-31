<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Vendedor;

class ContarVendedoresCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:contar-vendedores';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Contar os vendedores no banco de dados.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $quantidadeDeVendedores = Vendedor::count();
        print(
            sprintf("Temos %s de vendedores no banco de dados.", $quantidadeDeVendedores) . PHP_EOL
        );
    }
}
