<?php

namespace skynostrum;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Skynostrum;


class Productos extends Model
{

    protected $table='productos';
    protected $fillable=['codigo', 'nombre', 'stock','precio','attachment'];


    public function ventas(){
        return $this->hasMany(Ventas::class);
    }



    public function rutaFoto(){
        return "/images/productos/" . $this->attachment;
    }


}
