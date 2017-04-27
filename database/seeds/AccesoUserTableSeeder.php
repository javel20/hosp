<?php

use hosp\DetalleAccesoUser;

use Illuminate\Database\Seeder;

class AccesoUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalleaccesouser::create(['acceso_id' => '1','user_id' =>'1']);
        Detalleaccesouser::create(['acceso_id' => '2','user_id' =>'1']);
    }
}
