<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Tipohabitacion extends Model
{
    public function habitacions()
    {
        return $this->hasMany(Habitacion::class);
    }
}
