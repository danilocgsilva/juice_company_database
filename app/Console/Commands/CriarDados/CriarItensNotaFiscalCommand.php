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
            ItemNotaFiscal::factory()->create();
        }
    }
}
