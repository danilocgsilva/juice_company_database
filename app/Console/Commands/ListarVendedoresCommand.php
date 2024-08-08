<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Vendedor;

class ListarVendedoresCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:listar-vendedores';

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
        /**
         * @var Vendedor[]
         */
        $todosVendedores = Vendedor::all();
        foreach ($todosVendedores as $vendedor) {
            print($vendedor->getVendedorName() . "\n");
        }
    }
}
