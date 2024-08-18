<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FFactory;
use App\Models\Cliente;
use App\Models\Vendedor;

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
            'DATA_VENDA' => '2015-01-01',
            'NUMERO' => '100',
            'IMPOSTO' => '0.1'
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
}
