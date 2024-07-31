<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = "tabela_de_vendedores";

    public function getVendedorName(): string
    {
        return $this->NOME;
    }
}
