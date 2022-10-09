<?php

namespace Pruebas;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $table='pruebas'; 
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=['id','nombre','apellido',
    'correo','telefono','genero','fecha_nacimiento','lugar_estudio','finalizado','revisado','verificado'];

    public function respuestas(){
        $this->hasMany('App\Respuesta');
    }
}
