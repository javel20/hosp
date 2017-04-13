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
        Tipohabitacion::create(['nombre' => 'Doble', 'precio'=>'150', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'triple', 'precio'=>'180', 'descripcion'=>'asd']);
        Tipohabitacion::create(['nombre' => 'Presidencial', 'precio'=>'220', 'descripcion'=>'asd']);
    }
}
