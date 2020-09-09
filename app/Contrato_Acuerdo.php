<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato_Acuerdo extends Model
{
    protected $table = 'contratos_acuerdos';
    protected $primaryKey = 'id_acuerdo';
    protected $fillable = [
        'contrato_id','empresa_id'
    ];

    public function Contrato(){
        return $this->belongsTo(Contrato::class,'contrato_id');
    }

    public function Empresa(){
        return $this->belongsTo(Empresa::class,'empresa_id');
    }
}
