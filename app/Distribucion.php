<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribucion extends Model
{
    protected $table = 'distribuciones';
    protected $primaryKey = 'id_distribucion';
    protected $fillable =
        [
            'pelicula_id',
            'empresa_id',
            'delivery_id',
            'porcentaje',
            'presupuesto',
            'estado_id'
        ];

    public function pelicula(){
        return $this->belongsTo(Pelicula::class, 'pelicula_id');
    }

    public function Delivery(){
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    public function Empresa(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function Factura(){
        return $this->hasOne(Factura::class, 'distribucion_id');
    }

    public function Estado(){
        return $this->belongsTo(Estado::class, 'estado_id');
    }

}
