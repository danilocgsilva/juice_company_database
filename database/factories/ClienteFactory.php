<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FFactory;
use DateTime;
use Illuminate\Support\Collection;
use MathPHP\Probability\Distribution\Continuous\Normal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    private Normal $normalDistribuitionMimiteCredito;
    
    public function __construct(
        $count = null,
        ?Collection $states = null,
        ?Collection $has = null,
        ?Collection $for = null,
        ?Collection $afterMaking = null,
        ?Collection $afterCreating = null,
        $connection = null,
        ?Collection $recycle = null
    ) {
        parent::__construct(
            $count,
            $states,
            $has,
            $for,
            $afterMaking,
            $afterCreating,
            $connection,
            $recycle
        );

        $mean = 100_000;
        $stdDeviation = 10_000;
        $this->normalDistribuitionMimiteCredito = new Normal($mean, $stdDeviation);
    }
    
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
            'CPF' => str_replace(".", "",
                str_replace("-", "", $this->faker->cpf)
            ),
            'NOME' => $this->faker->name(($gender = rand(0, 1) === 0 ? 'F' : 'M')),
            'ENDERECO_1' => $this->faker->streetName,
            'ENDERECO_2' => $this->faker->streetName,
            'BAIRRO' => "Liberdade",
            'CIDADE' => $this->faker->city,
            'ESTADO' => "SP",
            'CEP' => str_replace("-", "", $this->faker->postcode),
            'DATA_DE_NASCIMENTO'=> ($dataNascimentoCliente = $this->generateRandomDate()),
            'IDADE' => $this->calcularIdade($dataNascimentoCliente),
            'SEXO' => $gender,
            'LIMITE_DE_CREDITO' => round($this->normalDistribuitionMimiteCredito->rand()),
            'VOLUME_DE_COMPRA' => round($this->gerarDistribuicaoPadrao(18000, 2000), 0),
            'PRIMEIRA_COMPRA' => rand(0, 3) === 0 ? 0 : 1
        ];
    }

    private function generateRandomDate()
    {
        $randomUnixTimestamp = rand(523421251, 1123421251);

        return DateTime::createFromFormat("U", $randomUnixTimestamp)->format('Y-m-d');
    }

    private function calcularIdade(string $dataString): int
    {
        $dataParts = explode("-", $dataString);
        return (string) (new DateTime)->format('Y') - (int) $dataParts[0];
    }

    private function gerarDistribuicaoPadrao(float $media, float $desvioPadrao): float
    {
        $normalDistribuition = new Normal($media, $desvioPadrao);
        return $normalDistribuition->rand();
    }
}
