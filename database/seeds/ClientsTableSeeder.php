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

        \DB::table('clients')->insert(array(
            'nombre'      => 'Miguel Admin',
            'rif'  => 'J-3865763',
            'direccion'  => 'Maracay - Las Rosas - Calle 04 - Apartamento 08 - Bloque 9',
            'telefono' => '04269075215',
            'correo' => 'miguel@gmail.com'
        ));

        \DB::table('clients')->insert(array(
            'nombre'      => 'Dan Admin',
            'rif'  => 'J-3245763',
            'direccion'  => 'Maracay - Las Rosas - Calle 04 - Apartamento 08 - Bloque 9',
            'telefono' => '04261075325',
            'correo' => 'dan@gmail.com'
        ));

    }
}
