<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
    protected $primaryKey = 'id_contrato';
    protected $fillable = [
        'admin_id','fecha_inicio','fecha_fin','tipo'
    ];

    public function ContratoLaboral (){
        return $this->hasOne(Contrato_Laboral::class, 'contrato_id');
    }
    public function ContratoAcuerdo (){
        return $this->hasOne(Contrato_Acuerdo::class, 'contrato_id');
    }
}
