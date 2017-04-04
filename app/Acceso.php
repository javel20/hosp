<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Acceso extends Model
{
    public function user()
    {
        return $this->belongsToMany('hosp\User');
    }
}
