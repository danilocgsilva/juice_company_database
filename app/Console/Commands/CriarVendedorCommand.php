<?php

namespace App\Console\Commands;

use App\Models\Vendedor;
use Illuminate\Console\Command;
use Exception;

class CriarVendedorCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:criar-vendedor {--quantidade=1} {--percentual-comissao=?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Criar um vendedor';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        /** @var \App\Models\Vendedor[] */
        $vendedores = [];
        for ($i = 0; $i < (int) $this->option('quantidade'); $i++) {
            $success = false;
            while (!$success) {
                $trial = 1;
                try {
                    $vendedores[] = Vendedor::factory()->create();
                    $success = true;
                } catch (Exception $e) {
                    print("Oops, exception: " . $e->getMessage() . " at trial {$trial}, but I will continue...\n");
                    $trial++;
                }
            }
        }

        $quantidadeDeVendedores = count($vendedores);

        print(
            ($quantidadeDeVendedores > 1 ? "Foram criados " : "Foi criado ") .
            $quantidadeDeVendedores . 
            " " . 
            ($quantidadeDeVendedores > 1 ? "vendedores" : "vendedor") . 
            ".\n"
        );

        foreach ($vendedores as $vendedor) {
            print($vendedor->getVendedorName() . PHP_EOL);
        }
    }
}
