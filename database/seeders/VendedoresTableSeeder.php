<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\Vendedor;

class VendedoresTableSeeder extends Seeder
{
    public function run(): void
    {
        Vendedor::factory()->create();
    }
}
