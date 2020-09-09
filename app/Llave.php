<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Llave extends Model
{
    protected $table = 'llaves';
    protected $primaryKey = 'id_llave';
    protected $fillable = [
        'fecha',' empresa_id', 'pelicula_id'
    ];

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function pelicula(){
        return $this->belongsTo(Pelicula::class, 'pelicula_id');
    }
}
