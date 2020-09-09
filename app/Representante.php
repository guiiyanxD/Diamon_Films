<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    protected $table ='representantes';
    protected $primaryKey = 'id_representante';
    protected $fillable = ['cargo_representante','persona_id', 'empresa_id'];

    public function persona(){
        return $this->belongsTo(Persona::class,'persona_id');
    }

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
