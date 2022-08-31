<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Pruebas\Prueba;

class ResultsController extends Controller
{
    //
    public function index($id)
    {
        $prueba = new Prueba;
        $alumno = DB::table("pruebas")->select('nombre', 'apellido')->where('id', $id)->get();
        $respuestas = DB::table("respuestas")
            ->join('pruebas', 'pruebas.id', '=', 'respuestas.id_prueba')->select('respuestas.*', 'pruebas.id')->where([
                "id_prueba" => $id,
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
        $cero = self::cero($respuestas);
        $uno=self::uno($respuestas);
        //dd($validez);
        return view('admin.resultados', compact('respuestas', 'actividades', 'validez', 'cero', 'alumno','uno'));
    }
    public function validez($respuestas) //evalua la plantilla de validez se auxilia de la función de casos
    {
        //Columna 12
        $validez = self::evaluar(substr($respuestas[0]->bloque_tres, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[0]->bloque_tres, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[0]->bloque_ocho, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[0]->bloque_ocho, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[0]->bloque_ocho, 2, 1), 2);
        $validez += self::evaluar(substr($respuestas[0]->bloque_doce, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[0]->bloque_doce, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[0]->bloque_doce, 2, 1), 1);
        //Columna 11
        $validez += self::evaluar(substr($respuestas[1]->bloque_dos, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[1]->bloque_dos, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[1]->bloque_dos, 2, 1), 3);
        $validez += self::evaluar(substr($respuestas[1]->bloque_cinco, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[1]->bloque_cinco, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[1]->bloque_cinco, 2, 1), 3);
        $validez += self::evaluar(substr($respuestas[1]->bloque_ocho, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[1]->bloque_ocho, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[1]->bloque_ocho, 2, 1), 2);
        $validez += self::evaluar(substr($respuestas[1]->bloque_trece, 0, 1), 3);
        $validez += self::evaluar(substr($respuestas[1]->bloque_trece, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[1]->bloque_trece, 2, 1), 2);
        //Columna 10
        $validez += self::evaluar(substr($respuestas[2]->bloque_uno, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[2]->bloque_uno, 1, 1), 2);
        //Columna 9
        $validez += self::evaluar(substr($respuestas[3]->bloque_cinco, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[3]->bloque_cinco, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[3]->bloque_cinco, 2, 1), 1);
        $validez += self::evaluar(substr($respuestas[3]->bloque_ocho, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[3]->bloque_ocho, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[3]->bloque_ocho, 2, 1), 1);
        $validez += self::evaluar(substr($respuestas[3]->bloque_doce, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[3]->bloque_doce, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[3]->bloque_doce, 2, 1), 2);
        //Columna 8
        $validez += self::evaluar(substr($respuestas[4]->bloque_seis, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[4]->bloque_seis, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[4]->bloque_seis, 2, 1), 2);
        $validez += self::evaluar(substr($respuestas[4]->bloque_doce, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[4]->bloque_doce, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[4]->bloque_doce, 2, 1), 1);
        //Columna 7
        $validez += self::evaluar(substr($respuestas[5]->bloque_dos, 2, 1), 1);
        $validez += self::evaluar(substr($respuestas[5]->bloque_dos, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[5]->bloque_diez, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[5]->bloque_diez, 2, 1), 2);
        //Columna 6
        $validez += self::evaluar(substr($respuestas[6]->bloque_dos, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[6]->bloque_dos, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[6]->bloque_dos, 2, 1), 2);
        //Columna 5
        $validez += self::evaluar(substr($respuestas[7]->bloque_cuatro, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[7]->bloque_cuatro, 2, 1), 1);
        $validez += self::evaluar(substr($respuestas[7]->bloque_cinco, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[7]->bloque_cinco, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[7]->bloque_cinco, 2, 1), 2);
        $validez += self::evaluar(substr($respuestas[7]->bloque_trece, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[7]->bloque_trece, 2, 1), 2);
        //Columna 4
        $validez += self::evaluar(substr($respuestas[8]->bloque_ocho, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[8]->bloque_ocho, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[8]->bloque_ocho, 2, 1), 2);
        //Columna 3
        $validez += self::evaluar(substr($respuestas[9]->bloque_cinco, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[9]->bloque_cinco, 1, 1), 3);
        $validez += self::evaluar(substr($respuestas[9]->bloque_cinco, 2, 1), 2);
        $validez += self::evaluar(substr($respuestas[9]->bloque_once, 0, 1), 1);
        $validez += self::evaluar(substr($respuestas[9]->bloque_once, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[9]->bloque_once, 2, 1), 2);
        //Columna 2
        $validez += self::evaluar(substr($respuestas[10]->bloque_ocho, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[10]->bloque_ocho, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[10]->bloque_ocho, 2, 1), 2);
        //Columna 1
        $validez += self::evaluar(substr($respuestas[11]->bloque_uno, 0, 1), 3);
        $validez += self::evaluar(substr($respuestas[11]->bloque_uno, 1, 1), 2);
        $validez += self::evaluar(substr($respuestas[11]->bloque_uno, 2, 1), 1);
        $validez += self::evaluar(substr($respuestas[11]->bloque_tres, 0, 1), 2);
        $validez += self::evaluar(substr($respuestas[11]->bloque_tres, 1, 1), 1);
        $validez += self::evaluar(substr($respuestas[11]->bloque_tres, 2, 1), 3);
        return $validez;
    }
    public function cero($respuestas)
    {
        //Columna 12
        $cero = self::evaluar(substr($respuestas[0]->bloque_dos, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_dos, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_dos, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[0]->bloque_tres, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_tres, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[0]->bloque_tres, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_cuatro, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[0]->bloque_cuatro, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_cinco, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[0]->bloque_cinco, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_cinco, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_siete, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[0]->bloque_siete, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[0]->bloque_siete, 2, 1), 1);
        //Columna 11
        $cero += self::evaluar(substr($respuestas[1]->bloque_uno, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_uno, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[1]->bloque_uno, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[1]->bloque_dos, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_dos, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_dos, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[1]->bloque_tres, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[1]->bloque_tres, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_tres, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_cuatro, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[1]->bloque_cuatro, 2, 1), 2);
        //Columna 10
        $cero += self::evaluar(substr($respuestas[2]->bloque_uno, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[2]->bloque_uno, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[2]->bloque_uno, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[2]->bloque_cinco, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[2]->bloque_cinco, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[2]->bloque_cinco, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[2]->bloque_siete, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[2]->bloque_siete, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[2]->bloque_siete, 2, 1), 2);
        //Columna 9
        $cero += self::evaluar(substr($respuestas[3]->bloque_dos, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[3]->bloque_dos, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[3]->bloque_dos, 2, 1), 1);
        //Columna 8
        $cero += self::evaluar(substr($respuestas[4]->bloque_uno, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[4]->bloque_uno, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[4]->bloque_uno, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[4]->bloque_siete, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[4]->bloque_siete, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[4]->bloque_siete, 2, 1), 2);
        //Columna 7
        $cero += self::evaluar(substr($respuestas[5]->bloque_uno, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[5]->bloque_uno, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[5]->bloque_uno, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[5]->bloque_dos, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[5]->bloque_dos, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[5]->bloque_dos, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[5]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[5]->bloque_cuatro, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[5]->bloque_cuatro, 2, 1), 1);
        //Columna 6
        $cero += self::evaluar(substr($respuestas[6]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[6]->bloque_cuatro, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[6]->bloque_cuatro, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[6]->bloque_cinco, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[6]->bloque_cinco, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[6]->bloque_cinco, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[6]->bloque_seis, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[6]->bloque_seis, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[6]->bloque_seis, 2, 1), 1);
        //Columna 5
        $cero += self::evaluar(substr($respuestas[7]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[7]->bloque_cuatro, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[7]->bloque_cuatro, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[7]->bloque_seis, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[7]->bloque_seis, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[7]->bloque_seis, 2, 1), 2);
        //Columna 4
        $cero += self::evaluar(substr($respuestas[8]->bloque_dos, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[8]->bloque_dos, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[8]->bloque_dos, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[8]->bloque_seis, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[8]->bloque_seis, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[8]->bloque_seis, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[8]->bloque_once, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[8]->bloque_once, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[8]->bloque_once, 2, 1), 2);
        //Columna 3
        $cero += self::evaluar(substr($respuestas[9]->bloque_dos, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[9]->bloque_dos, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[9]->bloque_dos, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[9]->bloque_tres, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[9]->bloque_tres, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[9]->bloque_tres, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[9]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[9]->bloque_cuatro, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[9]->bloque_cuatro, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[9]->bloque_cinco, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[9]->bloque_cinco, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[9]->bloque_cinco, 2, 1), 2);
        //Columna 2
        $cero += self::evaluar(substr($respuestas[10]->bloque_uno, 0, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_uno, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_uno, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_dos, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_dos, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_dos, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_tres, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_tres, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_tres, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_cuatro, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_cuatro, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_cinco, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_cinco, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_cinco, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_seis, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[10]->bloque_seis, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[10]->bloque_seis, 2, 1), 1);
        //Columna 1
        $cero += self::evaluar(substr($respuestas[11]->bloque_uno, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_uno, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[11]->bloque_uno, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[11]->bloque_tres, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_tres, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_tres, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[11]->bloque_cuatro, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_cuatro, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[11]->bloque_cuatro, 2, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_seis, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_seis, 1, 1), 2);
        $cero += self::evaluar(substr($respuestas[11]->bloque_seis, 2, 1), 2);
        $cero += self::evaluar(substr($respuestas[11]->bloque_ocho, 0, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_ocho, 1, 1), 1);
        $cero += self::evaluar(substr($respuestas[11]->bloque_ocho, 2, 1), 2);
        return $cero;
    }
    public function uno($respuestas)
    {
        //Columna 12
        $uno = self::evaluar(substr($respuestas[0]->bloque_diez, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[0]->bloque_diez, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[0]->bloque_diez, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[0]->bloque_trece, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[0]->bloque_trece, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[0]->bloque_trece, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[0]->bloque_catorce, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[0]->bloque_catorce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[0]->bloque_catorce, 2, 1), 1);
        //Columna 11
        $uno += self::evaluar(substr($respuestas[1]->bloque_diez, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[1]->bloque_diez, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[1]->bloque_diez, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[1]->bloque_trece, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[1]->bloque_trece, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[1]->bloque_trece, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[1]->bloque_catorce, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[1]->bloque_catorce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[1]->bloque_catorce, 2, 1), 1);
        return $uno;
    }
    public function evaluar($respuesta, $op)
    {
        $puntaje = 0;
        switch ($op) {
            case 1: // tiene -
                if ($respuesta == '-')
                    $puntaje++;
                break;
            case 2: // tiene +
                if ($respuesta == '+')
                    $puntaje++;
                break;
            case 3: // tiene + o -
                if ($respuesta == '-' ||  $respuesta == '+')
                    $puntaje++;
                break;
        }
        return $puntaje;
    }
}
