<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='personas';
    protected $primaryKey = 'id_persona';
    protected $fillable = [
        'nombre', 'apellido', 'carnet_id','fecha_nacimiento','email_personal','celular', 'direccion','tipo'
    ];

    public function representante(){
        return $this->hasOne(Representante::class, 'persona_id');
    }

    public function usuario(){
        return $this->hasOne(User::class,'persona_id');
    }
}
