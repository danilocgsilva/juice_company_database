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
        $cpfGerado = str_replace(".", "",
            str_replace("-", "", $this->faker->cpf)
        );
        
        return [
            'CPF' => str_replace(".", "",
                str_replace("-", "", $this->faker->cpf)
            ),
            'NOME' => $this->faker->name,
            'ENDERECO_1' => $this->faker->streetName,
            'ENDERECO_2' => $this->faker->streetName,
            'BAIRRO' => $this->faker->bairro,
            'CIDADE' => "São Paulo",
            'ESTADO' => "SP",
            'CEP' => "01525010",
            'DATA_DE_NASCIMENTO'=> "1995-01-03",
            'IDADE' => 22,
            'SEXO' => 'M',
            'LIMITE_DE_CREDITO' => 110000,
            'VOLUME_DE_COMPRA' => 22000,
            'PRIMEIRA_COMPRA' => 1
        ];
    }
}
