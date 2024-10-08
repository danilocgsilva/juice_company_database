<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "tabela_de_clientes";

    public function getNome(): string
    {
        return $this->NOME;
    }

    public function getCpf(): string
    {
        return $this->CPF;
    }
}
