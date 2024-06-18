<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planta extends Model
{
    protected $table = "planta";
    protected $primaryKey = 'id_planta';
    use HasFactory;
}
