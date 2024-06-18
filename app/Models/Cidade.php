<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    protected $table = "cidade";
    protected $primaryKey = 'id_cidade';
    use HasFactory;
}
