<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estados';
    protected $primaryKey = 'id_estado';
    protected $fillable =
        [
            'nombre',
            'descripcion'
        ];

    public function distribucion(){
        return $this->hasMany(Distribucion::class,'estado_id');
    }
}
