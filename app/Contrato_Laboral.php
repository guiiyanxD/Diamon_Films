<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato_Laboral extends Model
{
    protected $table = 'contratos_laborales';
    protected $primaryKey = 'id_laboral';
    protected $fillable = [
        'contrato_id', 'admin_id', 'sueldo'
    ];

    public function Contrato(){
        return $this->belongsTo(Contrato::class,'contrato_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'admin_id');
    }
}
