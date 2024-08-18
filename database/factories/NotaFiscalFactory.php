<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FFactory;
use App\Models\Cliente;
use App\Models\Vendedor;
use App\Models\NotaFiscal;
use MathPHP\Probability\Distribution\Continuous\Normal;
use DateTime;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class NotaFiscalFactory extends Factory
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
            'CPF' => $this->getRandomCpfCliente(),
            'MATRICULA' => $this->getRandomVendedorMatricula(),
            'DATA_VENDA' => $this->getDataVendaAleatoria(),
            'NUMERO' => $this->getNextNumero() + 1,
            'IMPOSTO' => rand(0,1) === 1 ? '0.1' : '0.12'
        ];
    }

    private function getRandomCpfCliente(): string
    {
        return Cliente::all()->random()->getCpf();
    }

    private function getRandomVendedorMatricula(): string
    {
        return Vendedor::all()->random()->getMatricula();
    }

    private function getNextNumero(): int
    {
        return NotaFiscal::max('NUMERO') ?? 99;
    }

    private function getDataVendaAleatoria(): string
    {
        $unixTimesTamp = (new Normal(1_450_000_000, 100_000_000))->rand();
        return DateTime::createFromFormat('U', (int)  $unixTimesTamp)->format('Y-m-d');
    }
}
