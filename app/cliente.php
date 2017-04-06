<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function hospedaje()
    {
        return $this->hasMany('App\Hospedaje');
    }
    
}
