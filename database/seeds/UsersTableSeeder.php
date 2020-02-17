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
    }
}
