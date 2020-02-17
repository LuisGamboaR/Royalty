<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert(array(
            'nombre'      => 'Pan de araquipe',
            'stock_actual'  => '20',
            'stock_min'  => '5',
            'stock_max' => '20',
            'precio' => '30000',
            'descripcion' => 'pan dulce relleno de araquipe',

            
        ));

    }
}
