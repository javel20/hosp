<?php

namespace hosp;

use Illuminate\Database\Eloquent\Model;

class Hospedaje extends Model
{
    public function habitacion()
    {
        return $this->belongsTo('hosp\Habitacion');
    }

    public function trabajador()
    {
        return $this->belongsTo('hosp\Trabajador');
    }

    public function cliente()
    {
        return $this->belongsTo('hosp\Cliente');
    }

    public function scopeHospedaje($query, $dato){

        return $query->join('clientes','hospedajes.cliente_id','=','clientes.id')
                    ->join('trabajadors','hospedajes.trabajador_id','=','trabajadors.id')
                    ->join('habitacions','hospedajes.habitacion_id','=','habitacions.id')
                    ->join('tipohabitacions','habitacions.tipohabitacion_id','=','tipohabitacions.id')
                    ->where('hospedaje.codigo','LIKE', "%$dato->buscar%")
                    ->orWhere('hospedaje.estado','LIKE', "%$dato->buscar%")
                    ->select('hospedajes,*,trabajador.nombre as nombretra')
                    ->paginate(7);

    }
}
