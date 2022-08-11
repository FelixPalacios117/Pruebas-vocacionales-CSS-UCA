<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pruebas\Respuesta;
class QuizTwoController extends Controller
{
    //
    public function store(){
        return redirect('/parte3');
    }
    public function segunda()
    {
        $parte_dos = file_get_contents('json/parte2.json');
        $preguntas_dos = json_decode($parte_dos);
        $prueba = DB::table('respuestas')->where([
            'id_prueba' => session('id_prueba'),
            'parte' => 2
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
            return view('quiz.parte2', compact('preguntas_dos', 'arreglo'));
        } else {
            return view('quiz.parte2', compact('preguntas_dos'));
        }
    }
}
