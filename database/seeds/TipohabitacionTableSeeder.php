<?php

use hosp\Tipohabitacion;
use Illuminate\Database\Seeder;

class TipohabitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipohabitacion::create(['nombre' => 'Simple', 'precio'=>'100', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'Doble', 'precio'=>'100', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'triple', 'precio'=>'100', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'Presidencial', 'precio'=>'100', 'descripcion'=>'asd']);
    }
}
