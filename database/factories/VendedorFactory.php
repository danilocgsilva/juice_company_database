<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Vendedor;
use MathPHP\Probability\Distribution\Continuous\Normal;
use Illuminate\Support\Collection;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VendedorFactory extends Factory
{
    protected $model = Vendedor::class;

    private Normal $normalDistribuition;

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

        $mean = 0.13;
        $stdDeviation = 0.05;
        $this->normalDistribuition = new Normal($mean, $stdDeviation);
    }

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

    private function gerarComissaoAleatoreamente()
    {
        $normalChoosen = $this->normalDistribuition->rand();
        
        if ($normalChoosen < ($mean = $this->normalDistribuition->mean())) {
            $diference = $mean - $normalChoosen;
            return $normalChoosen + ($diference / 2);
        }
        return $normalChoosen;
    }
}
