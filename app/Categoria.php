<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $fillable =
        ['nombre', 'descripcion'];

    public function peliculas(){
        return $this->hasMany(Pelicula::class,'categoria_id');
    }
}
