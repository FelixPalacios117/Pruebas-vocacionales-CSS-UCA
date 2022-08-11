<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pruebas\Respuesta;
class QuizOneController extends Controller
{

    public function primera()
    {
        $parte_uno = file_get_contents('json/parte1.json');
        $preguntas_uno = json_decode($parte_uno);
        $prueba = DB::table('respuestas')->where([
            'id_prueba' => session('id_prueba'),
            'parte' => 1
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
            return view('quiz.parte1', compact('preguntas_uno', 'arreglo'));
        } else {
            return view('quiz.parte1', compact('preguntas_uno'));
        }
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
        $bloque_doce = $request->K . $request->L . $request->M;
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
        $encontrado = DB::table('respuestas')->where('id_prueba', session('id_prueba'))->first();
        if ($encontrado) {
            Respuesta::where('id_prueba', session('id_prueba'))->update(
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
        return redirect('/parte2');
    }
}