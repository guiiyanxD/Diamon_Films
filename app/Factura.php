<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table ='facturas';
    public $primaryKey ='id_factura';
    protected $fillable=['concepto','descripcion','monto','iva_factura','it'];

    public function Distribucion(){
        return $this->belongsTo(Distribucion::class,'distribucion_id');
    }

}
