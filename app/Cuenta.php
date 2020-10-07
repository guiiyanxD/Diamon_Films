<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $table = 'cuentas';
    protected $primarykey = 'id_cuenta';
    protected $fillable =
        [
            'nombre',
            'descripcion',
            'monto',
            'tipo'
        ];

}
