<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PopularTabelaProdutosCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular-tabela-produtos';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Popula a tabela com produtos padrões';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call("db:seed", ["--class" => "ProdutosSeeder"]);
    }
}
