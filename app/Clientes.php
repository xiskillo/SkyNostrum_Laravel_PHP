<?php

namespace skynostrum;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table='clientes';

    protected $fillable=['nombre', 'apellidos', 'direccion','ciudad','cp'];



    public function ventas(){
        return $this->hasMany(Ventas::class);
    }
}
