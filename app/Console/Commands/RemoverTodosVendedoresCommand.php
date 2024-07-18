<?php

namespace App\Console\Commands;

use App\Models\Vendedor;
use Illuminate\Console\Command;

class RemoverTodosVendedoresCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remover-todos-vendedores';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remover todos os vendedores';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (Vendedor::all() as $vendedor) {
            print($vendedor->NOME . "\n");
            Vendedor::where('MATRICULA', $vendedor->MATRICULA)->delete();
        }
    }
}
