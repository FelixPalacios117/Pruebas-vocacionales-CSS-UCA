<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Pruebas\Prueba;
use Pruebas\Respuesta;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon; 
use DateTime;

class QuizController extends Controller
{

    //
    public function primera()
    {
        $parte_uno = file_get_contents('json/parte1.json');
        $preguntas_uno = json_decode($parte_uno);
        return view('quiz.parte1', compact('preguntas_uno'));
    }
    public function instrucciones(Request $request)
    {
        //dd($request->genero); imprime el dato que viene del form
        //con esto puedo guardar el id del que lleno sus datos en session variables
        //session(['idCarrito' => '123456']);
        //dd(session('idCarrito'));
        // session()->forget('idCarrito');
        $this->validate($request, [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo' => 'required|email|unique:pruebas,correo',
            'telefono' => 'required|unique:pruebas,telefono',
            'genero' => 'required',
            'lugar' => 'required',
            'fecha' => 'required|date'
        ]); 
        $date = new DateTime($request->fecha);  
        $edad= Carbon::createFromDate($date->format('Y'),$date->format('m'),$date->format('d'))->age; 
        if($edad<15 || $edad>55){
            return back()->withInput()->withErrors('Debes ser mayor de 15 años e ingresar una fecha válida');
        } 
        $prueba = new Prueba;
        $prueba->nombre = $request->nombre;
        $prueba->apellido = $request->apellido;
        $prueba->correo = $request->correo;
        $prueba->telefono=$request->telefono;
        $prueba->genero=$request->genero;
        $prueba->lugar_estudio=$request->lugar;
        $prueba->fecha=$request->fecha;   
        $prueba->save();
        $id_prueba= DB::table('pruebas')->where('correo', $request->correo)->value('id');
        session(['id_prueba' => $id_prueba]);
        return view('instrucciones');
    }
    public function store(Request $request)
    { 
        $this->validate($request, [
            'a' => 'required|different:c',
            'b' => 'required|different:a',
            'c' => 'required|different:b',
            'd' => 'required|different:f',
            'e' => 'required|different:d',
            'f' => 'required|different:e',
            'g' => 'required|different:j',
            'h' => 'required|different:g',
            'j' => 'required|different:h',
            'k' => 'required|different:m',
            'l' => 'required|different:k',
            'm' => 'required|different:l',
            'n' => 'required|different:q',
            'p' => 'required|different:n',
            'q' => 'required|different:p',
            'r' => 'required|different:t',
            's' => 'required|different:r',
            't' => 'required|different:s',
            'u' => 'required|different:w',
            'v' => 'required|different:u',
            'w' => 'required|different:v',
            'x' => 'required|different:z',
            'y' => 'required|different:x',
            'z' => 'required|different:y',
            'A' => 'required|different:C',
            'B' => 'required|different:A',
            'C' => 'required|different:B',
            'D' => 'required|different:F',
            'E' => 'required|different:D',
            'F' => 'required|different:E',
            'G' => 'required|different:J',
            'H' => 'required|different:G',
            'J' => 'required|different:H',
            'K' => 'required|different:M',
            'L' => 'required|different:K',
            'M' => 'required|different:L',
            'N' => 'required|different:Q',
            'P' => 'required|different:N',
            'Q' => 'required|different:P',
            'R' => 'required|different:T',
            'S' => 'required|different:R',
            'T' => 'required|different:S',

        ]);  
         //bloques de respuestas 
            $bloque_uno = $request->a . $request->b . $request->c; //esto para todos los bloques de preguntas
            $bloque_dos = $request->d . $request->e . $request->f;
            $bloque_tres = $request->g . $request->h . $request->j;
            $bloque_cuatro = $request->k . $request->l . $request->m;
            $bloque_cinco = $request->n . $request->p . $request->q;
            $bloque_seis = $request->r . $request->s . $request->t;
            $bloque_siete = $request->u . $request->v . $request->w;
            $bloque_ocho = $request->x . $request->y . $request->z;
            $bloque_nueve = $request->A . $request->B . $request->C;
            $bloque_diez = $request->D . $request->E . $request->F;
            $bloque_once = $request->G . $request->H . $request->J;
            $bloque_doce = $request->K. $request->L . $request->M;
            $bloque_trece = $request->N . $request->P . $request->Q;
            $bloque_catorce = $request->R . $request->S . $request->T; 
            $respuesta = new Respuesta; 
            $respuesta->id_prueba = session('id_prueba');
            $respuesta->parte = 1;
            $respuesta->bloque_uno = $bloque_uno;
            $respuesta->bloque_dos = $bloque_dos;
            $respuesta->bloque_tres = $bloque_tres;
            $respuesta->bloque_cuatro = $bloque_cuatro;
            $respuesta->bloque_cinco = $bloque_cinco;
            $respuesta->bloque_seis = $bloque_seis;
            $respuesta->bloque_siete = $bloque_siete;
            $respuesta->bloque_ocho = $bloque_ocho;
            $respuesta->bloque_nueve = $bloque_nueve;
            $respuesta->bloque_diez = $bloque_diez;
            $respuesta->bloque_once = $bloque_once;
            $respuesta->bloque_doce = $bloque_doce;
            $respuesta->bloque_trece = $bloque_trece;
            $respuesta->bloque_catorce = $bloque_catorce;
            $respuesta->save(); 
    }
}
