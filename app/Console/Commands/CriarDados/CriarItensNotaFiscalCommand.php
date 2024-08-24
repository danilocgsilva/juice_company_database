<?php

namespace App\Console\Commands\CriarDados;

use Illuminate\Console\Command;
use App\Models\ItemNotaFiscal;

class CriarItensNotaFiscalCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:criar-itens-nota-fiscal {--quantidade=1}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria um item de nota fiscal';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        for ($i = 0; $i < (int) $this->option('quantidade'); $i++) {
            $this->criarItemNotaFiscal();
        }
    }

    private function criarItemNotaFiscal(): void
    {
        /** @var ItemNotaFiscal $item */
        $item = ItemNotaFiscal::factory()->create();
        print(
            sprintf(
                "Item criado. Número: %s, código do produto: %s, quantidade: %s, preço: %s" . PHP_EOL,
                $item->getNumero(),
                $item->getCodigoDoProduto(),
                $item->getQuantidade(),
                $item->getPreco()
            )
        );
    }
}
