<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Pruebas\Prueba;
use Pruebas\Respuesta;

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
            'nombre' => 'required|string|different:apellido',
            'apellido'=>'required|string|different:nombre',
            'correo' => 'required|email|unique:pruebas,correo',
            'telefono'=>'required|unique:pruebas,telefono',
            'genero'=>'required',
            'lugar'=>'required',
            'fecha'=>'required|date'
        ]);

        $prueba = new Prueba;
        $prueba->nombre = $request->nombre;
        $prueba->apellido = $request->apellido;
        $prueba->correo = $request->correo;
        session(['id_prueba' => 1]);
        return view('instrucciones');
    }
    public function store(Request $request)
    {
        //imprimir dd($request->el) ;
        $this->validate($request, [
            'al' => 'required',
            'bl' => 'required',
            'cl' => 'required',
            'dl' => 'required',
            'el' => 'required',
            'fl' => 'required'
        ]);
        if ($request->al == $request->cl || $request->al == $request->bl || $request->bl == $request->cl) {
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades a b c, las respuestas de las 3 actividades de cada bloque deben ser diferentes');
        } else if ($request->dl == $request->el || $request->dl == $request->fl || $request->el == $request->fl) {
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades d e f, las respuestas de las 3 actividades de cada bloque deben ser diferentes');
        } else if ($request->gl == $request->hl || $request->gl == $request->jl || $request->jl == $request->hl) {
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades g h j, las respuestas de las 3 actividades de cada bloque deben ser diferentes');
        } else if ($request->kl == $request->ll || $request->kl == $request->ml || $request->ll == $request->ml) {
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades k l m, las respuestas de las 3 actividades de cada bloque deben ser diferentes');
        } else if ($request->nl == $request->pl || $request->nl == $request->ql || $request->pl == $request->ql) {
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades n p q, las respuestas de las 3 actividades de cada bloque deben ser diferentes');
        } else {
            //bloques de respuestas
            $bloque_uno = $request->al . $request->bl . $request->cl; //esto para todos los bloques de preguntas
            $bloque_dos = $request->dl . $request->el . $request->fl;
            $bloque_tres = $request->gl . $request->hl . $request->jl;
            $bloque_cuatro = $request->kl . $request->ll . $request->ml;
            $bloque_cinco = $request->nl . $request->pl . $request->ql;
            $bloque_seis = $request->rl . $request->sl . $request->tl;
            $bloque_siete = $request->ul . $request->vl . $request->wl;
            $bloque_ocho = $request->xl . $request->yl . $request->zl;
            $bloque_nueve = $request->au . $request->bu . $request->cu;
            $bloque_diez = $request->du . $request->eu . $request->fu;
            $bloque_once = $request->gu . $request->hu . $request->ju;
            $bloque_doce = $request->ku . $request->lu . $request->mu;
            $bloque_trece = $request->nu . $request->pu . $request->qu;
            $bloque_catorce = $request->ru . $request->su . $request->tu;

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
}
