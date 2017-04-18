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

    public function scopeHabitacions($query, $dato)
    {
        return $query->join('tipohabitacions', 'habitacions.tipohabitacion_id', '=' ,'tipohabitacions.id')
                    ->where('numero','LIKE', '%'. $dato->buscar. '%')
                    ->select('habitacions.*', 'tipohabitacions.nombre')
                    ->paginate(7);

    }

    //traigo las habitaciones que tengan el mismo id tipohabitacion
    public function scopehabitacionAjax($query,$id)
    {
    return $query->where('tipohabitacion_id', $id)
                    ->get();
    }

}
