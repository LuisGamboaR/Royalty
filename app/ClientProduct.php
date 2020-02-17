<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientProduct extends Model
{
    protected $table='client_product';

	protected $fillable=['client_id','product_id', 'cantidad', 'total', 'precio'];
}
