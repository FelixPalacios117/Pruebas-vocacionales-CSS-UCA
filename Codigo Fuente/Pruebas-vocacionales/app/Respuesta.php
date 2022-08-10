<?php

namespace Pruebas;

use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    protected $table='respuestas'; 
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'id_prueba',
        'parte',
        'bloque_uno',
        'bloque_dos',
        'bloque_tres',
        'bloque_cuatro',
        'bloque_cinco',
        'bloque_seis',
        'bloque_siete',
        'bloque_ocho',
        'bloque_nueve',
        'bloque_diez',
        'bloque_once',
        'bloque_doce',
        'bloque_trece',
        'bloque_catorce'
    ];
    public function prueba(){
        $this->belongsTo('App\Prueba');
    }
}
