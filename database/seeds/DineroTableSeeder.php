<?php

use Illuminate\Database\Seeder;

class DineroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('dineros')->insert(array(
            'dinero'      => '0',

            
        ));

    }
}
