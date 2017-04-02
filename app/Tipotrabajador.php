<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Tipotrabajador extends Model
{
    public function trabajador()
    {
        return $this->hasMany(Trabajador::class);
    }
}
