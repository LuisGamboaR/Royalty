<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientProduct extends Model
{
    protected $table='client_product';

	protected $fillable=['material_id','supplier_id', 'cantidad', 'total', 'precio'];
}
