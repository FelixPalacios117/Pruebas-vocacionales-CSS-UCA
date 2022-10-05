<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pruebas\Prueba;
use Pruebas\Respuesta;

class QuizTwelveController extends Controller
{
    //
    public function store(Request $request)
    {
        $this->validate($request, [
            'A' => 'required|different:B|different:C',
            'B' => 'required|different:A|different:C',
            'C' => 'required|different:A|different:B',
            'D' => 'required|different:E|different:F',
            'E' => 'required|different:F|different:D',
            'F' => 'required|different:E|different:D',
            'G' => 'required|different:J|different:H',
            'H' => 'required|different:G|different:J',
            'J' => 'required|different:H|different:G',
            'K' => 'required|different:L|different:M',
            'L' => 'required|different:M|different:K',
            'M' => 'required|different:K|different:L',
            'N' => 'required|different:P|different:Q',
            'P' => 'required|different:Q|different:N',
            'Q' => 'required|different:P|different:N',
            'R' => 'required|different:S|different:T',
            'S' => 'required|different:T|different:R',
            'T' => 'required|different:S|different:R',
            'U' => 'required|different:V|different:W',
            'V' => 'required|different:W|different:U',
            'W' => 'required|different:V|different:U',
            'X' => 'required|different:Y|different:Z',
            'Y' => 'required|different:Z|different:X',
            'Z' => 'required|different:Y|different:X',
            'a' => 'required|different:b|different:c',
            'b' => 'required|different:c|different:a',
            'c' => 'required|different:a|different:b',
            'd' => 'required|different:e|different:f',
            'e' => 'required|different:f|different:d',
            'f' => 'required|different:d|different:e',
            'g' => 'required|different:h|different:j',
            'h' => 'required|different:j|different:g',
            'j' => 'required|different:g|different:h',
            'k' => 'required|different:l|different:m',
            'l' => 'required|different:m|different:k',
            'm' => 'required|different:l|different:k',
            'n' => 'required|different:p|different:q',
            'p' => 'required|different:n|different:q',
            'q' => 'required|different:n|different:p',
            'r' => 'required|different:t|different:s',
            's' => 'required|different:r|different:t',
            't' => 'required|different:s|different:r',
        ]);
        //se construyen cada bloque de respuestas

        $bloque_uno = $request->A . $request->B . $request->C;
        $bloque_dos = $request->D . $request->E . $request->F;
        $bloque_tres = $request->G . $request->H . $request->J;
        $bloque_cuatro = $request->K . $request->L . $request->M;
        $bloque_cinco = $request->N . $request->P . $request->Q;
        $bloque_seis = $request->R . $request->S . $request->T;
        $bloque_siete = $request->U . $request->V . $request->W;
        $bloque_ocho = $request->X . $request->Y . $request->Z;
        $bloque_nueve = $request->a . $request->b . $request->c;
        $bloque_diez = $request->d . $request->e . $request->f;
        $bloque_once = $request->g . $request->h . $request->j;
        $bloque_doce = $request->k . $request->l . $request->m;
        $bloque_trece = $request->n . $request->p . $request->q;
        $bloque_catorce = $request->r . $request->s . $request->t;

        //respuesta enviada
        $respuesta = new Respuesta;
        $respuesta->id_prueba = session('id_prueba');
        $respuesta->parte = 12;
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
        $encontrado = DB::table('respuestas')->where([
            'id_prueba' => session('id_prueba'),
            'parte' => 12
        ])->first();
        if ($encontrado) {
            Respuesta::where([
                'id_prueba' => session('id_prueba'),
                'parte' => 12
            ])->update(
                [
                    'bloque_uno' => $bloque_uno,
                    'bloque_dos' => $bloque_dos,
                    'bloque_tres' => $bloque_tres,
                    'bloque_cuatro' => $bloque_cuatro,
                    'bloque_cinco' => $bloque_cinco,
                    'bloque_seis' => $bloque_seis,
                    'bloque_siete' => $bloque_siete,
                    'bloque_ocho' => $bloque_ocho,
                    'bloque_nueve' => $bloque_nueve,
                    'bloque_diez' => $bloque_diez,
                    'bloque_once' => $bloque_once,
                    'bloque_doce' => $bloque_doce,
                    'bloque_trece' => $bloque_trece,
                    'bloque_catorce' => $bloque_catorce,
                ]
            );
        } else {
            $respuesta->save();
        }
        Prueba::where([
            'id' => session('id_prueba')
        ])->update([
            'finalizado' =>true
        ]);
        $completa = DB::table('respuestas')->where('id_prueba', session('id_prueba'))->count();
        if ($request->btnAnterior) {
            return redirect('/parte11');
        }
        if ($request->btnFinalizar) {
            if ($completa == 12) {
                session()->forget('id_prueba');
                session(['completa'=>1]); 
                return redirect(env('APP_URL').'finalizar');
            }else{
                return back()->withInput()->withErrors(['parts'=>'No puedes finalizar, aún tienes partes sin contestar del cuestionario']);
            }
        }
    }
    public function doceava()
    {
        $parte_doce = file_get_contents('json/parte12.json');
        $preguntas_doce = json_decode($parte_doce);
        $prueba = DB::table('respuestas')->where([
            'id_prueba' => session('id_prueba'),
            'parte' => 12
        ])->first();
        if ($prueba) {
            $arreglo = array(substr($prueba->bloque_uno, 0, 1), substr($prueba->bloque_uno, 1, 1), substr($prueba->bloque_uno, 2, 1));
            //bloque 2
            $arreglo[3] = (substr($prueba->bloque_dos, 0, 1));
            $arreglo[4] = (substr($prueba->bloque_dos, 1, 1));
            $arreglo[5] = (substr($prueba->bloque_dos, 2, 1));
            //bloque 3
            $arreglo[6] = (substr($prueba->bloque_tres, 0, 1));
            $arreglo[7] = (substr($prueba->bloque_tres, 1, 1));
            $arreglo[8] = (substr($prueba->bloque_tres, 2, 1));
            //bloque 4
            $arreglo[9] = (substr($prueba->bloque_cuatro, 0, 1));
            $arreglo[10] = (substr($prueba->bloque_cuatro, 1, 1));
            $arreglo[11] = (substr($prueba->bloque_cuatro, 2, 1));
            //bloque 5
            $arreglo[12] = (substr($prueba->bloque_cinco, 0, 1));
            $arreglo[13] = (substr($prueba->bloque_cinco, 1, 1));
            $arreglo[14] = (substr($prueba->bloque_cinco, 2, 1));
            //bloque 6
            $arreglo[15] = (substr($prueba->bloque_seis, 0, 1));
            $arreglo[16] = (substr($prueba->bloque_seis, 1, 1));
            $arreglo[17] = (substr($prueba->bloque_seis, 2, 1));
            //bloque 7
            $arreglo[18] = (substr($prueba->bloque_siete, 0, 1));
            $arreglo[19] = (substr($prueba->bloque_siete, 1, 1));
            $arreglo[20] = (substr($prueba->bloque_siete, 2, 1));
            //bloque 8
            $arreglo[21] = (substr($prueba->bloque_ocho, 0, 1));
            $arreglo[22] = (substr($prueba->bloque_ocho, 1, 1));
            $arreglo[23] = (substr($prueba->bloque_ocho, 2, 1));
            //bloque 9
            $arreglo[24] = (substr($prueba->bloque_nueve, 0, 1));
            $arreglo[25] = (substr($prueba->bloque_nueve, 1, 1));
            $arreglo[26] = (substr($prueba->bloque_nueve, 2, 1));
            //bloque 10
            $arreglo[27] = (substr($prueba->bloque_diez, 0, 1));
            $arreglo[28] = (substr($prueba->bloque_diez, 1, 1));
            $arreglo[29] = (substr($prueba->bloque_diez, 2, 1));
            //bloque 11
            $arreglo[30] = (substr($prueba->bloque_once, 0, 1));
            $arreglo[31] = (substr($prueba->bloque_once, 1, 1));
            $arreglo[32] = (substr($prueba->bloque_once, 2, 1));
            //bloque 12
            $arreglo[33] = (substr($prueba->bloque_doce, 0, 1));
            $arreglo[34] = (substr($prueba->bloque_doce, 1, 1));
            $arreglo[35] = (substr($prueba->bloque_doce, 2, 1));
            //bloque 13
            $arreglo[36] = (substr($prueba->bloque_trece, 0, 1));
            $arreglo[37] = (substr($prueba->bloque_trece, 1, 1));
            $arreglo[38] = (substr($prueba->bloque_trece, 2, 1));
            //bloque 14
            $arreglo[39] = (substr($prueba->bloque_catorce, 0, 1));
            $arreglo[40] = (substr($prueba->bloque_catorce, 1, 1));
            $arreglo[41] = (substr($prueba->bloque_catorce, 2, 1));
            return view('quiz.parte12', compact('preguntas_doce', 'arreglo'));
        } else {
            return view('quiz.parte12', compact('preguntas_doce'));
        }
    }
}
