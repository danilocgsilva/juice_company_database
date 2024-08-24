<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1000889',
            'NOME_DO_PRODUTO' => 'Sabor da Montanha - 700 ml - Uva',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Uva',
            'PRECO_DE_LISTA' => '6.30',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1002334',
            'NOME_DO_PRODUTO' => 'Linha Citros - 1 Litro - Lima/Limão',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1 Litro',
            'SABOR' => 'Lima/Limão',
            'PRECO_DE_LISTA' => '7.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1002767',
            'NOME_DO_PRODUTO' => 'Videira do Campo - 700 ml - Cereja/Maçã',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Cereja/Maçã',
            'PRECO_DE_LISTA' => '8.41',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1004327',
            'NOME_DO_PRODUTO' => 'Videira do Campo - 1,5 Litros - Melancia',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Melancia',
            'PRECO_DE_LISTA' => '19.51',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1013793',
            'NOME_DO_PRODUTO' => 'Videira do Campo - 2 Litros - Cereja/Maçã',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '2 Litros',
            'SABOR' => 'Cereja/Maçã',
            'PRECO_DE_LISTA' => '24.01',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1022450',
            'NOME_DO_PRODUTO' => 'Festival de Sabores - 2 Litros - Açaí',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '2 Litros',
            'SABOR' => 'Açaí',
            'PRECO_DE_LISTA' => '38.12',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1037797',
            'NOME_DO_PRODUTO' => 'Clean - 2 Litros - Laranja',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '2 Litros',
            'SABOR' => 'Laranja',
            'PRECO_DE_LISTA' => '16.10',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1040107',
            'NOME_DO_PRODUTO' => 'Light - 350 ml - Melancia',
            'EMBALAGEM' => 'Lata',
            'TAMANHO' => '350 ml',
            'SABOR' => 'Melancia',
            'PRECO_DE_LISTA' => '4.55',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1041119',
            'NOME_DO_PRODUTO' => 'Linha Citros - 700 ml - Lima/Limão',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Lima/Limão',
            'PRECO_DE_LISTA' => '4.90',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1078680',
            'NOME_DO_PRODUTO' => 'Frescor do Verão - 470 ml - Manga',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '470 ml',
            'SABOR' => 'Manga',
            'PRECO_DE_LISTA' => '5.20',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1086543',
            'NOME_DO_PRODUTO' => 'Linha Refrescante - 1 Litro - Manga',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1 Litro',
            'SABOR' => 'Manga',
            'PRECO_DE_LISTA' => '11.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1096818',
            'NOME_DO_PRODUTO' => 'Linha Refrescante - 700 ml - Manga',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Manga',
            'PRECO_DE_LISTA' => '7.70',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '1101035',
            'NOME_DO_PRODUTO' => 'Linha Refrescante - 1 Litro - Morango/Limão',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1 Litro',
            'SABOR' => 'Morango/Limão',
            'PRECO_DE_LISTA' => '9.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '229900',
            'NOME_DO_PRODUTO' => 'Pedaços de Frutas - 350 ml - Maçã',
            'EMBALAGEM' => 'Lata',
            'TAMANHO' => '350 ml',
            'SABOR' => 'Maçã',
            'PRECO_DE_LISTA' => '4.20',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '231776',
            'NOME_DO_PRODUTO' => 'Festival de Sabores - 700 ml - Açaí',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Açaí',
            'PRECO_DE_LISTA' => '13.25',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '235653',
            'NOME_DO_PRODUTO' => 'Frescor do Verão - 350 ml - Manga',
            'EMBALAGEM' => 'Lata',
            'TAMANHO' => '350 ml',
            'SABOR' => 'Manga',
            'PRECO_DE_LISTA' => '3.85',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '243083',
            'NOME_DO_PRODUTO' => 'Festival de Sabores - 1,5 Litros - Maracujá',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Maracujá',
            'PRECO_DE_LISTA' => '10.50',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '290478',
            'NOME_DO_PRODUTO' => 'Videira do Campo - 350 ml - Melancia',
            'EMBALAGEM' => 'Lata',
            'TAMANHO' => '350 ml',
            'SABOR' => 'Melancia',
            'PRECO_DE_LISTA' => '5.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '326779',
            'NOME_DO_PRODUTO' => 'Linha Refrescante - 1,5 Litros - Manga',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Manga',
            'PRECO_DE_LISTA' => '16.50',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '394479',
            'NOME_DO_PRODUTO' => 'Sabor da Montanha - 700 ml - Cereja',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Cereja',
            'PRECO_DE_LISTA' => '8.40',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '479745',
            'NOME_DO_PRODUTO' => 'Clean - 470 ml - Laranja',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '470 ml',
            'SABOR' => 'Laranja',
            'PRECO_DE_LISTA' => '3.80',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '520380',
            'NOME_DO_PRODUTO' => 'Pedaços de Frutas - 1 Litro - Maçã',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1 Litro',
            'SABOR' => 'Maçã',
            'PRECO_DE_LISTA' => '12.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '695594',
            'NOME_DO_PRODUTO' => 'Festival de Sabores - 1,5 Litros - Açaí',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Açaí',
            'PRECO_DE_LISTA' => '28.50',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '723457',
            'NOME_DO_PRODUTO' => 'Festival de Sabores - 700 ml - Maracujá',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Maracujá',
            'PRECO_DE_LISTA' => '4.90',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '746596',
            'NOME_DO_PRODUTO' => 'Light - 1,5 Litros - Melancia',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Melancia',
            'PRECO_DE_LISTA' => '19.50',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '773912',
            'NOME_DO_PRODUTO' => 'Clean - 1 Litro - Laranja',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1 Litro',
            'SABOR' => 'Laranja',
            'PRECO_DE_LISTA' => '8.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '783663',
            'NOME_DO_PRODUTO' => 'Sabor da Montanha - 700 ml - Morango',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Morango',
            'PRECO_DE_LISTA' => '7.70',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '788975',
            'NOME_DO_PRODUTO' => 'Pedaços de Frutas - 1,5 Litros - Maçã',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Maçã',
            'PRECO_DE_LISTA' => '18.00',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '812829',
            'NOME_DO_PRODUTO' => 'Clean - 350 ml - Laranja',
            'EMBALAGEM' => 'Lata',
            'TAMANHO' => '350 ml',
            'SABOR' => 'Laranja',
            'PRECO_DE_LISTA' => '2.80',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '826490',
            'NOME_DO_PRODUTO' => 'Linha Refrescante - 700 ml - Morango/Limão',
            'EMBALAGEM' => 'Garrafa',
            'TAMANHO' => '700 ml',
            'SABOR' => 'Morango/Limão',
            'PRECO_DE_LISTA' => '6.30',
        ]);
        DB::table('tabela_de_produtos')->insert([
            'CODIGO_DO_PRODUTO' => '838819',
            'NOME_DO_PRODUTO' => 'Clean - 1,5 Litros - Laranja',
            'EMBALAGEM' => 'PET',
            'TAMANHO' => '1,5 Litros',
            'SABOR' => 'Laranja',
            'PRECO_DE_LISTA' => '12.00',
        ]);
    }
}
