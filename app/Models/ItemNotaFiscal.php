<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemNotaFiscal extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = "itens_notas_fiscais";
}
