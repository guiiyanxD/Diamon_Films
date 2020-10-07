<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table ='peliculas';
    protected $primaryKey = 'id_pelicula';
    protected $fillable =
        ['nombre', 'clasificacion', 'formato', 'protagonista', 'sello_cinematografico', 'categoria_id', 'idioma', 'genero', 'admin_id'];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id');
    }

    public function User(){
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function Llave(){
        return $this->hasMany(Llave::class, 'pelicula_id');
    }

    public function distribucion(){
        return $this->hasMany(Distribucion::class, 'pelicula_id');
    }
}
