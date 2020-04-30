<?php

namespace skynostrum;

use Illuminate\Database\Eloquent\Model;


class Noticias extends Model
{
    //
    protected $table='noticias';

    protected $fillable=['user_id', 'titulo', 'contenido','attachment'];

    public function user(){
        return  $this->belongsTo(User::class);
    }
    
   
    public function rutaFoto(){
        return "/images/noticias/" . $this->attachment;
    }

}
