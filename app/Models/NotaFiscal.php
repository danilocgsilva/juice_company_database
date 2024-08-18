<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotaFiscal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'NUMERO';

    protected $table = "notas_fiscais";

    public function getNumero(): int
    {
        return $this->NUMERO;
    }
}
