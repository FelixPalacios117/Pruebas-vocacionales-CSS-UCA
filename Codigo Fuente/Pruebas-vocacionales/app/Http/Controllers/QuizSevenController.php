<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pruebas\Respuesta;

class QuizSevenController extends Controller
{

    public function septima()
    {
        $parte_siete = file_get_contents('json/parte7.json');
        $preguntas_siete = json_decode($parte_siete);
        $prueba = DB::table('respuestas')->where([
            'id_prueba' => session('id_prueba'),
            'parte' => 7
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
            return view('quiz.parte7', compact('preguntas_siete', 'arreglo'));
        } else {
            return view('quiz.parte7', compact('preguntas_siete'));
        }
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'a' => 'required|different:c|different:b',
            'b' => 'required|different:a|different:c',
            'c' => 'required|different:b|different:a',
            'd' => 'required|different:f|different:e',
            'e' => 'required|different:d|different:f',
            'f' => 'required|different:e|different:d',
            'g' => 'required|different:j|different:h',
            'h' => 'required|different:g|different:j',
            'j' => 'required|different:h|different:g',
            'k' => 'required|different:m|different:l',
            'l' => 'required|different:k|different:m',
            'm' => 'required|different:l|different:k',
            'n' => 'required|different:q|different:p',
            'p' => 'required|different:n|different:q',
            'q' => 'required|different:p|different:n',
            'r' => 'required|different:t|different:s',
            's' => 'required|different:r|different:t',
            't' => 'required|different:s|different:r',
            'u' => 'required|different:w|different:v',
            'v' => 'required|different:u|different:w',
            'w' => 'required|different:v|different:u',
            'x' => 'required|different:z|different:y',
            'y' => 'required|different:x|different:z',
            'z' => 'required|different:y|different:x',
            'A' => 'required|different:C|different:B',
            'B' => 'required|different:A|different:C',
            'C' => 'required|different:B|different:A',
            'D' => 'required|different:F|different:E',
            'E' => 'required|different:D|different:F',
            'F' => 'required|different:E|different:D',
            'G' => 'required|different:J|different:H',
            'H' => 'required|different:G|different:J',
            'J' => 'required|different:H|different:G',
            'K' => 'required|different:M|different:L',
            'L' => 'required|different:K|different:M',
            'M' => 'required|different:L|different:K',
            'N' => 'required|different:Q|different:P',
            'P' => 'required|different:N|different:Q',
            'Q' => 'required|different:P|different:N',
            'R' => 'required|different:T|different:S',
            'S' => 'required|different:R|different:T',
            'T' => 'required|different:S|different:R',

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
        //se preparan los campos de la respuesta que se envia
        $respuesta = new Respuesta;
        $respuesta->id_prueba = session('id_prueba');
        $respuesta->parte = 7;
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
            'parte' => 7
        ])->first();
        if ($encontrado) {
            Respuesta::where([
                'id_prueba' => session('id_prueba'),
                'parte' => 7
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
        if($request->btnAnterior){ 
            return redirect('/parte6');
        }
        if($request->btnSiguiente){
            return redirect('/parte8');
        }
    }
}
