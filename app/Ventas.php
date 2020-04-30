<?php

namespace skynostrum;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{

    protected $table='ventas';
    protected $fillable=['clientes_id', 'productos_id', 'cantidad','observaciones'];


    public function productos(){
        return  $this->belongsTo(Productos::class);
    }

    public function clientes(){
        return  $this->belongsTo(Clientes::class);
    }
}
