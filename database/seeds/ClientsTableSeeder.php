<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->insert(array(
            'nombre'      => 'Juan Perez',
            'rif'  => 'J-3845763',
            'direccion'  => 'Maracay - Las Rosas - Calle 04 - Apartamento 08 - Bloque 9',
            'telefono' => '04261075215',
            'correo' => 'juanperez@gmail.com'

            
        ));

    }
}
