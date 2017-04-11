<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    public function tipohabitacion()
    {
        return $this->belongsTo('hosp\Tipohabitacion');
    }

    public function hospedaje()
    {
        return $this->hasMany('App\Hospedaje');
    }

    public function scopeHabitacions($query)
    {
        return $query->join('tipohabitacions', 'habitacions.tipohabitacion_id', '=' ,'tipohabitacions.id')
                    ->select('habitacions.*', 'tipohabitacions.nombre')
                    ->get();

    }

    public function scopehabitacionajax($query,$id)
    {
    return $query->where('tipohabitacion_id', '=' ,$id)
                    ->select('habitacions.*')
                    ->get();
    }

}
