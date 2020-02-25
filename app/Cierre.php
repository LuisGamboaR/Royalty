<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cierre extends Model
{
    protected $fillable = [
        'b_punto', 'b_efectivo', 'd_efectivo', 'diario'
     ];
}
