<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    protected $table = "itens_pedido";
    protected $primaryKey = 'id_itens';
    use HasFactory;
}
