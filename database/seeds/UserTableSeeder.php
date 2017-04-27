<?php

use hosp\User;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['email' => 'javier_el_balla@hotmail.com', 'password' => bcrypt('javier20'), 'estado' => 'Habilitado', 'trabajador_id' => '1']);
    }
}
