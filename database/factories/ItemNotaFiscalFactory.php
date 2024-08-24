<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;
use App\Models\NotaFiscal;
use MathPHP\Probability\Distribution\Continuous\Normal;

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
            "QUANTIDADE" => $this->getValorNormal(),
            "PRECO" => $produtoEscolhido->getPreco()
        ];
    }

    private function getNumeroNotaFiscalRandom(): string
    {
        return NotaFiscal::all()->random()->getNumero();
    }

    private function getValorNormal(): int
    {
        $normal = new Normal(30, 20);
        $normalEscolhido = $normal->rand();
        $moduloValor = $normalEscolhido > 0 ? $normalEscolhido : $normalEscolhido * -1;
        return (int) $moduloValor;
    }
}
