<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vendedor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VendedorFactory extends Factory
{
    protected $model = Vendedor::class;

    public function withFaker()
    {
        return \Faker\Factory::create('pt_BR');
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'MATRICULA' => $this->generateMatricula(),
            'NOME' => $this->faker->name,
            'PERCENTUAL_COMISSAO' => $this->gerarComissaoAleatoreamente(),
            'DATA_ADMISSAO' => '2023-07-10',
            'DE_FERIAS' => 0,
            'BAIRRO' => $this->faker->streetName
        ];
    }

    public function generateMatricula(): string
    {
        return str_pad(
            (string) rand(1, 99999),
            5,
            "0",
            STR_PAD_LEFT
        );
    }

    private function gerarComissaoAleatoreamente(): float
    {
        $fator1 = rand(1, 99) ** 2;
        $fator4 = $fator1 + rand(0,199);
        $fator5 = $fator4 / 10000.0;
        return $fator5;
    }
}
