<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultsController extends Controller
{
    //
    public function index()
    {
        $respuestas = DB::table("respuestas")
            ->join('pruebas', 'pruebas.id', '=', 'respuestas.id_prueba')->select('respuestas.*', 'pruebas.id')->where([
                "id_prueba" => 1,
                "pruebas.finalizado" => true
            ])->orderBy('respuestas.parte', 'Desc')->get();
        $actividades = array(
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X',
            'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't',
            'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T'
        );
        $validez = self::validez($respuestas);
        //dd($validez);
        return view('admin.resultados', compact('respuestas', 'actividades', 'validez'));
    }
    public function validez($respuestas)
    {
        $validez = 0;
        //vamos validando uno por uno cada punto especifico por columna están del 12 al 1
        if (substr($respuestas[0]->bloque_tres, 0, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_tres, 1, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_ocho, 0, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_ocho, 1, 1) == '-') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_ocho, 2, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_doce, 0, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_doce, 1, 1) == '-') {
            $validez++;
        }
        if (substr($respuestas[0]->bloque_doce, 2, 1) == '-') {
            $validez++;
        }
        // Fin de la columna 12
        // Inicio columna 11
        if (substr($respuestas[1]->bloque_dos, 0, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_dos, 1, 1) == '-') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_dos, 2, 1) == '-' || substr($respuestas[1]->bloque_dos, 2, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_cinco, 0, 1) == '-') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_cinco, 1, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_cinco, 2, 1) == '-' || substr($respuestas[1]->bloque_cinco, 2, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_ocho, 0, 1) == '-') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_ocho, 1, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_ocho, 2, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_trece, 0, 1) == '-' || substr($respuestas[1]->bloque_trece, 0, 1) == '+') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_trece, 1, 1) == '-') {
            $validez++;
        }
        if (substr($respuestas[1]->bloque_trece, 2, 1) == '+') {
            $validez++;
        }
        //fin columna 11
        return $validez;
    }
}
