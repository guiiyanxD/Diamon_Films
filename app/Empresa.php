<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas';
    protected $primaryKey = 'id_empresa';
    protected $fillable =
        ['nombre', 'email', 'direccion','NIT', 'telefono'];

    public function representantes(){
        return $this->hasMany(Representante::class,'empresa_id');
    }

    public function ContratoAcuerdo(){
        return $this->hasMany(Empresa::class, 'empresa_id'); #esta mal, corregir el campo related
    }

    public function Llave(){
        return $this->hasMany(Llave::class, 'empresa_id');
    }

    public function Distribucion(){
        return $this->hasMany(Distribucion::class, 'empresa_id');
    }
}
