<?php

namespace App\Console\Commands;

use Danilocgsilva\DataToSeedLaravel\StringGenerator;
use Illuminate\Console\Command;

class SeedFromDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:seed-from-database';

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
        $stringGenerator = new StringGenerator();
        
        $databaseName = "sucos";
        $tableName = "tabela_de_produtos";

        $stringGenerator->setDatabaseName($databaseName);
        $stringGenerator->setTableName($tableName);

        $stringGenerated = $stringGenerator->generate();

        print($stringGenerated . PHP_EOL);
    }
}
