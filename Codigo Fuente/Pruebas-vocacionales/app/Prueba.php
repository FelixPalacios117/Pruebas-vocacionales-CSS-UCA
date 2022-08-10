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
    protected $fillable=['nombre','apellido',
    'correo','telefono','genero','lugar','fecha_nacimiento','lugar_estudio'];

    public function respuestas(){
        $this->hasMany('App\Respuesta');
    }
}
