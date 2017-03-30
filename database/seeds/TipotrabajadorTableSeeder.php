<?php

use hosp\Tipotrabajador;

use Illuminate\Database\Seeder;

class TipotrabajadorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipotrabajador::create(['nombre' => 'root', 'descripcion'=>'asd']);
        Tipotrabajador::create(['nombre' => 'Dueño', 'descripcion'=>'regerg']);
        Tipotrabajador::create(['nombre' => 'Administrador', 'descripcion'=>'wt5y6u']);
        Tipotrabajador::create(['nombre' => 'Recepcion', 'descripcion'=>'gnvcbef']);
    }
}
