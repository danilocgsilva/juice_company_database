<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\NotaFiscal;

class RemoverTodasNotasFiscaisCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:remover-todas-notas-fiscais';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove todas as notas fiscais';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (NotaFiscal::all() as $notaFiscal) {
            $notaFiscal->delete();
        }
    }
}
