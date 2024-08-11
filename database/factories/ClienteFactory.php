<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    public function withFaker()
    {
        return FFactory::create('pt_BR');
    }
    
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CPF'               => $this->faker->cpf,
            'NOME'              => "João Silva",
            'ENDERECO_1'        => "Rua dos abacates",
            'ENDERECO_2'        => "Rua das ameixas",
            'BAIRRO'            => "Liberdade",
            'CIDADE'            => "São Paulo",
            'ESTADO'            => "SP",
            'CEP'               => "01525010",
            'DATA_DE_NASCIMENTO'=> "1995-01-03",
            'IDADE'             => 22,
            'SEXO'              => 'M',
            'LIMITE_DE_CREDITO' => 110000,
            'VOLUME_DE_COMPRA'  => 22000,
            'PRIMEIRA_COMPRA'   => 1
        ];
    }
}
