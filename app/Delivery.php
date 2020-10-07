<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'deliveries';
    protected $primaryKey = 'id_delivery';
    protected $fillable =
        ['descripcion', 'admin_id', 'empresa_id'];

    public function user(){
        return $this->belongsTo(User::class,'admin_id');
    }

    public function Empresa(){
        return $this->belongsTo(Empresa::class,'empresa_id');
    }

    public function Distribucion(){
        return $this->hasMany(Distribucion::class, 'delivery_id');
    }

}
