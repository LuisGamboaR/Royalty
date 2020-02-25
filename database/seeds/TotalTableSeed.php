<?php

use Illuminate\Database\Seeder;

class TotalTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('diarios')->insert(array(
            'd_diario'      => '0',

            
        ));

    }
}
