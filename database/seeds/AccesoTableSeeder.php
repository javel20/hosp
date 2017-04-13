<?php

use hosp\Acceso;
use Illuminate\Database\Seeder;

class AccesoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Acceso::create(['nombre' => 'clientes']);
        Acceso::create(['nombre' => 'habitaciones']);
        Acceso::create(['nombre' => 'hospedajes']);
        Acceso::create(['nombre' => 'licencias']);
        Acceso::create(['nombre' => 'locales']);
        Acceso::create(['nombre' => 'tipo habitaciones']);
        Acceso::create(['nombre' => 'tipo trabajadores']);
        Acceso::create(['nombre' => 'trabajadores']);
        Acceso::create(['nombre' => 'usuarios']);
    }
}
