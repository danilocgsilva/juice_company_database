<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    
    protected $table = "tabela_de_produtos";

    public function getCodigoDoProduto(): string
    {
        return $this->CODIGO_DO_PRODUTO;
    }

    public function getPreco(): float
    {
        return (float) $this->PRECO_DE_LISTA;
    }
}
