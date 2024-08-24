<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemNotaFiscal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "itens_notas_fiscais";

    public function getNumero(): int
    {
        return (int) $this->NUMERO;
    }

    public function getCodigoDoProduto(): string
    {
        return $this->CODIGO_DO_PRODUTO;
    }

    public function getQuantidade(): int
    {
        return $this->QUANTIDADE;
    }

    public function getPreco(): float
    {
        return (float) $this->PRECO;
    }
}
