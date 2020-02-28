<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array(
            'name'      => 'Luis',
            'lastname'  => 'Gamboa',
            'identification'  => '287453',
            'email'     => 'admin@admin.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));

        \DB::table('users')->insert(array(
            'name'      => 'Miguel',
            'lastname'  => 'Admin',
            'identification'  => '217453',
            'email'     => 'miguel@miguel.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));



        \DB::table('users')->insert(array(
            'name'      => 'Dan',
            'lastname'  => 'Admin',
            'identification'  => '280453',
            'email'     => 'dan@dan.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));

        \DB::table('users')->insert(array(
            'name'      => 'Vendedor',
            'lastname'  => 'xd',
            'identification'  => '282453',
            'email'     => 'prueba@prueba.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('admin1234'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));

        
        \DB::table('users')->insert(array(
            'name'      => 'Auditor',
            'lastname'  => 'Auditore',
            'identification'  => '285453',
            'email'     => 'auditor@auditor.com',
            'email_verified_at' => now(),
            'password'  => bcrypt('auditor123'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
        ));



    }
}
