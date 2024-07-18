<?php

namespace App\Console\Commands;

use App\Models\Vendedor;
use Illuminate\Console\Command;

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
        // $vendedoresFactory = Vendedor::factory()
        // ->count($this->option('quantidade'));

        // $vendedores = [];
        // if ($this->option('percentual-comissao')) {
        //     $vendedores = $vendedoresFactory->make([
        //         'PERCENTUAL_COMISSAO' => (double) $this->option('percentual-comissao')
        //     ]);
        // } else {
        //     $vendedores = $vendedoresFactory->make();
        // }

        // print("Os vendedores serão criados:\n");
        // foreach ($vendedores as $vendedor) {
        //     print($vendedor->NOME . "\n");
        //     print("Comissão: " . $vendedor->PERCENTUAL_COMISSAO . "\n");
        //     $vendedor->create();
        // }

        $vendedores = Vendedor::factory()
            ->count($this->option('quantidade'))
            ->create();

        $quantidadeDeVendedores = count($vendedores);

        print(
            ($quantidadeDeVendedores > 1 ? "Foram criados " : "Foi criado ") .
            $quantidadeDeVendedores . 
            " " . 
            ($quantidadeDeVendedores > 1 ? "vendedores" : "vendedor") . 
            ".\n"
        );
    }
}
