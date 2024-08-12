<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FFactory;
use DateTime;

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
            'BAIRRO' => "Liberdade",
            'CIDADE' => $this->faker->city,
            'ESTADO' => "SP",
            'CEP' => str_replace("-", "", $this->faker->postcode),
            'DATA_DE_NASCIMENTO'=> $this->generateRandomDate(),
            'IDADE' => 22,
            'SEXO' => 'M',
            'LIMITE_DE_CREDITO' => 110000,
            'VOLUME_DE_COMPRA' => 22000,
            'PRIMEIRA_COMPRA' => 1
        ];
    }

    private function generateRandomDate()
    {
        $randomUnixTimestamp = rand(523421251, 1123421251);

        return DateTime::createFromFormat("U", $randomUnixTimestamp)->format('Y-m-d');
    }
}
