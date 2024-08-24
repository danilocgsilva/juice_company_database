<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use App\Models\NotaFiscal;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemNotaFiscal>
 */
class ItemNotaFiscalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $produtoEscolhido = Produto::all()->random();
        
        return [
            "NUMERO" => $this->getNumeroNotaFiscalRandom(),
            "CODIGO_DO_PRODUTO" => ($produtoEscolhido = Produto::all()->random())->getCodigoDoProduto(),
            "QUANTIDADE" => 63,
            "PRECO" => $produtoEscolhido->getPreco()
        ];
    }

    private function getNumeroNotaFiscalRandom(): string
    {
        return NotaFiscal::all()->random()->getNumero();
    }
}
