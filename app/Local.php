<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    public function trabajador()
    {
        return $this->hasMany(Trabajador::class);
    }
}
