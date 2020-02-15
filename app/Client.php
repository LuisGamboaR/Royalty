<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'nombre', 'rif', 'direccion', 'telefono','correo',
    ];

    public function products(){
        return $this->belongsToMany(Product::class, 'client_id'); //Muchos a muchos
    }
}
