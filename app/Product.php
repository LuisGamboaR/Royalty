<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nombre', 'stock_actual', 'stock_min', 'stock_max', 'precio', 'descripcion'
    ];

    
    public function clients(){
        return $this->belongsToMany(Product::class, 'product_id');
    }


  

}
