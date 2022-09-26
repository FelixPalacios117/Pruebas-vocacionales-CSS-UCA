<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Pruebas\Prueba;

class ResultsController extends Controller
{
    //
    public function index($id)
    {
        $prueba = new Prueba;
        $alumno = DB::table("pruebas")->select('nombre', 'apellido','revisado')->where('id', decrypt($id))->get();
        $respuestas = DB::table("respuestas")
            ->join('pruebas', 'pruebas.id', '=', 'respuestas.id_prueba')->select('respuestas.*', 'pruebas.id')->where([
                "id_prueba" => decrypt($id),
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
        $uno = self::uno($respuestas);
        $dos = self::dos($respuestas);
        $tres = self::tres($respuestas);
        $cuatro = self::cuatro($respuestas);
        $cinco = self::cinco($respuestas);
        $seis = self::seis($respuestas);
        $siete = self::siete($respuestas);
        $ocho = self::ocho($respuestas);
        $nueve = self::nueve($respuestas);
        return view('admin.resultados', compact(
            'id',
            'respuestas',
            'actividades',
            'validez',
            'dos',
            'cero',
            'uno',
            'cuatro',
            'tres',
            'cinco',
            'seis',
            'siete',
            'ocho',
            'nueve',
            'alumno'
        ));
    }

    public function finalizarRevision($id)
    {
        DB::table('pruebas')
            ->where('id', decrypt($id))
            ->update(['revisado' => '1']);
        return redirect('/home');
    }

    public function reiniciarPrueba($id)
    {
        DB::table('pruebas')
            ->where('id', decrypt($id))
            ->update(
                ['finalizado'=>'0'],
                ['revisado'=>'0']
            );
            
        DB::table('respuestas')
            ->where('id_prueba', decrypt($id));
        return redirect('/home');
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
        //Columna 10
        $uno += self::evaluar(substr($respuestas[2]->bloque_nueve, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_nueve, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_nueve, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[2]->bloque_diez, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_diez, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_diez, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[2]->bloque_once, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_once, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[2]->bloque_once, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_catorce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[2]->bloque_catorce, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[2]->bloque_catorce, 2, 1), 1);
        //Columna 9
        $uno += self::evaluar(substr($respuestas[3]->bloque_nueve, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[3]->bloque_nueve, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[3]->bloque_nueve, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[3]->bloque_once, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[3]->bloque_once, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[3]->bloque_once, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[3]->bloque_trece, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[3]->bloque_trece, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[3]->bloque_trece, 2, 1), 1);
        //Columna 8
        $uno += self::evaluar(substr($respuestas[4]->bloque_nueve, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[4]->bloque_nueve, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[4]->bloque_nueve, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[4]->bloque_once, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[4]->bloque_once, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[4]->bloque_once, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[4]->bloque_catorce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[4]->bloque_catorce, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[4]->bloque_catorce, 2, 1), 1);
        //Columna 7
        $uno += self::evaluar(substr($respuestas[5]->bloque_ocho, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_ocho, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_ocho, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[5]->bloque_once, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_once, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_once, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[5]->bloque_doce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_doce, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[5]->bloque_doce, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_catorce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_catorce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[5]->bloque_catorce, 2, 1), 2);
        //Columna 6
        $uno += self::evaluar(substr($respuestas[6]->bloque_ocho, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_ocho, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[6]->bloque_ocho, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_nueve, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[6]->bloque_nueve, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_nueve, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_diez, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[6]->bloque_diez, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_diez, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_doce, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[6]->bloque_doce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_doce, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_trece, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_trece, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[6]->bloque_trece, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_catorce, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[6]->bloque_catorce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[6]->bloque_catorce, 2, 1), 1);
        //Columna 5
        $uno += self::evaluar(substr($respuestas[7]->bloque_diez, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[7]->bloque_diez, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[7]->bloque_diez, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[7]->bloque_doce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[7]->bloque_doce, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[7]->bloque_doce, 2, 1), 1);
        $uno += self::evaluar(substr($respuestas[7]->bloque_catorce, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[7]->bloque_catorce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[7]->bloque_catorce, 2, 1), 1);
        //Columna 4
        $uno += self::evaluar(substr($respuestas[8]->bloque_catorce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[8]->bloque_catorce, 1, 1), 2);
        $uno += self::evaluar(substr($respuestas[8]->bloque_catorce, 2, 1), 1);
        //Columna 1
        $uno += self::evaluar(substr($respuestas[11]->bloque_diez, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_diez, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_diez, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[11]->bloque_once, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_once, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_once, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[11]->bloque_doce, 0, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_doce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_doce, 2, 1), 2);
        $uno += self::evaluar(substr($respuestas[11]->bloque_catorce, 0, 1), 2);
        $uno += self::evaluar(substr($respuestas[11]->bloque_catorce, 1, 1), 1);
        $uno += self::evaluar(substr($respuestas[11]->bloque_catorce, 2, 1), 1);
        return $uno;
    }

    public function dos($respuestas)
    {
        //Columna 12
        $dos = self::evaluar(substr($respuestas[0]->bloque_uno, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[0]->bloque_uno, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[0]->bloque_uno, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[0]->bloque_siete, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[0]->bloque_siete, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[0]->bloque_siete, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[0]->bloque_diez, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[0]->bloque_diez, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[0]->bloque_diez, 2, 1), 1);
        //Columna 11
        $dos += self::evaluar(substr($respuestas[1]->bloque_seis, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[1]->bloque_seis, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[1]->bloque_seis, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[1]->bloque_diez, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[1]->bloque_diez, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[1]->bloque_diez, 2, 1), 2);
        //Columna 10
        $dos += self::evaluar(substr($respuestas[2]->bloque_tres, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[2]->bloque_tres, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[2]->bloque_tres, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[2]->bloque_nueve, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[2]->bloque_nueve, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[2]->bloque_nueve, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[2]->bloque_once, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[2]->bloque_once, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[2]->bloque_once, 2, 1), 2);
        //Columna 9
        $dos += self::evaluar(substr($respuestas[3]->bloque_dos, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[3]->bloque_dos, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_dos, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_tres, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_tres, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[3]->bloque_tres, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_nueve, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_nueve, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[3]->bloque_nueve, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_diez, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_diez, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[3]->bloque_diez, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_once, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_once, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[3]->bloque_once, 2, 1), 2);
        //Columna 8
        $dos += self::evaluar(substr($respuestas[4]->bloque_uno, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[4]->bloque_uno, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_uno, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_tres, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[4]->bloque_tres, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_tres, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_ocho, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_ocho, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_ocho, 2, 1), 2);
        $dos += self::evaluar(substr($respuestas[4]->bloque_nueve, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_nueve, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[4]->bloque_nueve, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_diez, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_diez, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[4]->bloque_diez, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_once, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_once, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[4]->bloque_once, 2, 1), 2);
        //Columna 7
        $dos += self::evaluar(substr($respuestas[5]->bloque_uno, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[5]->bloque_uno, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[5]->bloque_uno, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[5]->bloque_ocho, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[5]->bloque_ocho, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[5]->bloque_ocho, 2, 1), 1);
        //Columna 6
        $dos += self::evaluar(substr($respuestas[6]->bloque_tres, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[6]->bloque_tres, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[6]->bloque_tres, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[6]->bloque_ocho, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[6]->bloque_ocho, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[6]->bloque_ocho, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[6]->bloque_diez, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[6]->bloque_diez, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[6]->bloque_diez, 2, 1), 2);

        //Columna 5
        $dos += self::evaluar(substr($respuestas[7]->bloque_uno, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[7]->bloque_uno, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[7]->bloque_uno, 2, 1), 2);
        $dos += self::evaluar(substr($respuestas[7]->bloque_dos, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[7]->bloque_dos, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[7]->bloque_dos, 2, 1), 1);
        $dos += self::evaluar(substr($respuestas[7]->bloque_tres, 0, 1), 2);
        $dos += self::evaluar(substr($respuestas[7]->bloque_tres, 1, 1), 1);
        $dos += self::evaluar(substr($respuestas[7]->bloque_tres, 2, 1), 1);
        //Columna 1
        $dos += self::evaluar(substr($respuestas[11]->bloque_dos, 0, 1), 1);
        $dos += self::evaluar(substr($respuestas[11]->bloque_dos, 1, 1), 2);
        $dos += self::evaluar(substr($respuestas[11]->bloque_dos, 2, 1), 1);
        return $dos;
    }
    public function tres($respuestas)
    {
        //Columna 12
        $tres = self::evaluar(substr($respuestas[0]->bloque_trece, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[0]->bloque_trece, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[0]->bloque_trece, 2, 1), 2);
        //Columna 9
        $tres += self::evaluar(substr($respuestas[3]->bloque_trece, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[3]->bloque_trece, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[3]->bloque_trece, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[3]->bloque_catorce, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[3]->bloque_catorce, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[3]->bloque_catorce, 2, 1), 1);
        //Columna 7
        $tres += self::evaluar(substr($respuestas[5]->bloque_siete, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[5]->bloque_siete, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[5]->bloque_siete, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[5]->bloque_trece, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[5]->bloque_trece, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[5]->bloque_trece, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[5]->bloque_catorce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[5]->bloque_catorce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[5]->bloque_catorce, 2, 1), 1);
        //Columna 6
        $tres += self::evaluar(substr($respuestas[6]->bloque_cinco, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[6]->bloque_cinco, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[6]->bloque_cinco, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[6]->bloque_seis, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[6]->bloque_seis, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[6]->bloque_seis, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[6]->bloque_siete, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[6]->bloque_siete, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[6]->bloque_siete, 2, 1), 1);
        //Columna 5
        $tres += self::evaluar(substr($respuestas[7]->bloque_seis, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_seis, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_seis, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[7]->bloque_siete, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[7]->bloque_siete, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_siete, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_nueve, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_nueve, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[7]->bloque_nueve, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_once, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_once, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_once, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[7]->bloque_doce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_doce, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_doce, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[7]->bloque_trece, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_trece, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[7]->bloque_trece, 2, 1), 2);
        //Columna 4
        $tres += self::evaluar(substr($respuestas[8]->bloque_siete, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_siete, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[8]->bloque_siete, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_nueve, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_nueve, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[8]->bloque_nueve, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_doce, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[8]->bloque_doce, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_doce, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_trece, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[8]->bloque_trece, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_trece, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_catorce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[8]->bloque_catorce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[8]->bloque_catorce, 2, 1), 1);
        //Columna 3
        $tres += self::evaluar(substr($respuestas[9]->bloque_seis, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_seis, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_seis, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_siete, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_siete, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_siete, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_nueve, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_nueve, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_nueve, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_diez, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_diez, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_diez, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_doce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_doce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_doce, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_trece, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_trece, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[9]->bloque_trece, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_catorce, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_catorce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[9]->bloque_catorce, 2, 1), 1);
        //Columna 2
        $tres += self::evaluar(substr($respuestas[10]->bloque_seis, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_seis, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[10]->bloque_seis, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_siete, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_siete, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_siete, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[10]->bloque_doce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_doce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[10]->bloque_doce, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_trece, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[10]->bloque_trece, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_trece, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_catorce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[10]->bloque_catorce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[10]->bloque_catorce, 2, 1), 1);
        //Columna 1
        $tres += self::evaluar(substr($respuestas[11]->bloque_siete, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[11]->bloque_siete, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[11]->bloque_siete, 2, 1), 2);
        $tres += self::evaluar(substr($respuestas[11]->bloque_diez, 0, 1), 2);
        $tres += self::evaluar(substr($respuestas[11]->bloque_diez, 1, 1), 1);
        $tres += self::evaluar(substr($respuestas[11]->bloque_diez, 2, 1), 1);
        $tres += self::evaluar(substr($respuestas[11]->bloque_doce, 0, 1), 1);
        $tres += self::evaluar(substr($respuestas[11]->bloque_doce, 1, 1), 2);
        $tres += self::evaluar(substr($respuestas[11]->bloque_doce, 2, 1), 1);
        return $tres;
    }
    public function cuatro($respuestas)
    {
        //Columna 12
        $cuatro = self::evaluar(substr($respuestas[0]->bloque_uno, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[0]->bloque_uno, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[0]->bloque_uno, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[0]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[0]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[0]->bloque_tres, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[0]->bloque_seis, 2, 1), 2);
        //Columna 11
        $cuatro += self::evaluar(substr($respuestas[1]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[1]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[1]->bloque_tres, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[1]->bloque_cuatro, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[1]->bloque_cuatro, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[1]->bloque_cuatro, 2, 1), 1);
        //Columna 10
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_dos, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_dos, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_dos, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_tres, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_tres, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[2]->bloque_seis, 2, 1), 2);
        //Columna 9
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_uno, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_uno, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_uno, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_dos, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_dos, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_dos, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_tres, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_cuatro, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_cuatro, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[3]->bloque_cuatro, 2, 1), 1);
        //Columna 8
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_dos, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_dos, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_dos, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_tres, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_tres, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_cuatro, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_cuatro, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_cuatro, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_cinco, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_cinco, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[4]->bloque_cinco, 2, 1), 1);
        //Columna 7
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_tres, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_seis, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_seis, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_seis, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_once, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_once, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[5]->bloque_once, 2, 1), 1);
        //Columna 6
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_tres, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_tres, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_ocho, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_ocho, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_ocho, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_nueve, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_nueve, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_nueve, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_diez, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_diez, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[6]->bloque_diez, 2, 1), 1);
        //Columna 5
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_uno, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_uno, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_uno, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_dos, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_dos, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_dos, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_cuatro, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_cuatro, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_cuatro, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_seis, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_seis, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_seis, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_siete, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_siete, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_siete, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_diez, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_diez, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_diez, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_once, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_once, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[7]->bloque_once, 2, 1), 1);
        //Columna 4
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_uno, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_uno, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_uno, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_tres, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_tres, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_seis, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_seis, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_seis, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_nueve, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_nueve, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_nueve, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_diez, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_diez, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_diez, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_once, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_once, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[8]->bloque_once, 2, 1), 1);
        //Columna 3
        $cuatro += self::evaluar(substr($respuestas[9]->bloque_uno, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[9]->bloque_uno, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[9]->bloque_uno, 2, 1), 2);
        //Columna 2
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_tres, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_tres, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_tres, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_nueve, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_nueve, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_nueve, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_diez, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_diez, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_diez, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_once, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_once, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[10]->bloque_once, 2, 1), 1);
        //Columna 1
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_dos, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_dos, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_dos, 2, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_ocho, 0, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_ocho, 1, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_ocho, 2, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_diez, 0, 1), 1);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_diez, 1, 1), 2);
        $cuatro += self::evaluar(substr($respuestas[11]->bloque_diez, 2, 1), 1);
        return $cuatro;
    }
    public function cinco($respuestas)
    {
        //Columna 12
        $cinco = self::evaluar(substr($respuestas[0]->bloque_seis, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_seis, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_seis, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_nueve, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_nueve, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_nueve, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_once, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_once, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_once, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_siete, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_siete, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[0]->bloque_siete, 2, 1), 1);
        //Columna 11
        $cinco += self::evaluar(substr($respuestas[1]->bloque_nueve, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[1]->bloque_nueve, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[1]->bloque_nueve, 2, 1), 2);
        //Columna 10
        $cinco += self::evaluar(substr($respuestas[2]->bloque_seis, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[2]->bloque_seis, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[2]->bloque_seis, 2, 1), 1);
        //Columna 9
        $cinco += self::evaluar(substr($respuestas[3]->bloque_seis, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_seis, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_seis, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_siete, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_siete, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_siete, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_diez, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_diez, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_diez, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_trece, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_trece, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[3]->bloque_trece, 2, 1), 2);
        //Columna 8
        $cinco += self::evaluar(substr($respuestas[4]->bloque_ocho, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_ocho, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_ocho, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_diez, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_diez, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_diez, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_trece, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_trece, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[4]->bloque_trece, 2, 1), 1);
        //Columna 7
        $cinco += self::evaluar(substr($respuestas[5]->bloque_seis, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_seis, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_seis, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_siete, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_siete, 1, 1), 2);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_siete, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_once, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_once, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_once, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_catorce, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_catorce, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[5]->bloque_catorce, 2, 1), 1);
        //Columna 5
        $cinco += self::evaluar(substr($respuestas[7]->bloque_once, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[7]->bloque_once, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[7]->bloque_once, 2, 1), 1);
        //Columna 4
        $cinco += self::evaluar(substr($respuestas[8]->bloque_once, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_once, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_once, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_doce, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_doce, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_doce, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_catorce, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_catorce, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[8]->bloque_catorce, 2, 1), 1);
        //Columna 2
        $cinco += self::evaluar(substr($respuestas[10]->bloque_once, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[10]->bloque_once, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[10]->bloque_once, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[10]->bloque_doce, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[10]->bloque_doce, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[10]->bloque_doce, 2, 1), 1);
        //Columna 1
        $cinco += self::evaluar(substr($respuestas[11]->bloque_doce, 0, 1), 2);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_doce, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_doce, 2, 1), 1);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_trece, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_trece, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_trece, 2, 1), 2);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_catorce, 0, 1), 1);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_catorce, 1, 1), 1);
        $cinco += self::evaluar(substr($respuestas[11]->bloque_catorce, 2, 1), 2);

        return $cinco;
    }

    public function seis($respuestas)
    {
        //Columna 12
        $seis = self::evaluar(substr($respuestas[0]->bloque_seis, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[0]->bloque_seis, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[0]->bloque_seis, 2, 1), 1);
        //Columna 11
        $seis += self::evaluar(substr($respuestas[1]->bloque_cuatro, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[1]->bloque_cuatro, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[1]->bloque_cuatro, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[1]->bloque_siete, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[1]->bloque_siete, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[1]->bloque_siete, 2, 1), 1);
        //Columna 10
        $seis += self::evaluar(substr($respuestas[2]->bloque_cuatro, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[2]->bloque_cuatro, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[2]->bloque_cuatro, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[2]->bloque_seis, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[2]->bloque_seis, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[2]->bloque_seis, 2, 1), 1);
        //Columna 9
        $seis += self::evaluar(substr($respuestas[3]->bloque_dos, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[3]->bloque_dos, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_dos, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_cuatro, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[3]->bloque_cuatro, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_cuatro, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_seis, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_seis, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[3]->bloque_seis, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_siete, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_siete, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[3]->bloque_siete, 2, 1), 2);
        //Columna 7
        $seis += self::evaluar(substr($respuestas[5]->bloque_seis, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[5]->bloque_seis, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[5]->bloque_seis, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[5]->bloque_siete, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[5]->bloque_siete, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[5]->bloque_siete, 2, 1), 2);
        //Columna 6
        $seis += self::evaluar(substr($respuestas[6]->bloque_uno, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[6]->bloque_uno, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[6]->bloque_uno, 2, 1), 2);
        $seis += self::evaluar(substr($respuestas[6]->bloque_siete, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[6]->bloque_siete, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[6]->bloque_siete, 2, 1), 2);
        //Columna 5
        $seis += self::evaluar(substr($respuestas[7]->bloque_tres, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[7]->bloque_tres, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[7]->bloque_tres, 2, 1), 1);
        //Columna 4
        $seis += self::evaluar(substr($respuestas[8]->bloque_tres, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_tres, 1, 1), 2);
        $seis += self::evaluar(substr($respuestas[8]->bloque_tres, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_cuatro, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_cuatro, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_cuatro, 2, 1), 2);
        $seis += self::evaluar(substr($respuestas[8]->bloque_cinco, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[8]->bloque_cinco, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_cinco, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_siete, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[8]->bloque_siete, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[8]->bloque_siete, 2, 1), 1);
        //Cplumna 3
        $seis += self::evaluar(substr($respuestas[9]->bloque_uno, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[9]->bloque_uno, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[9]->bloque_uno, 2, 1), 1);
        $seis += self::evaluar(substr($respuestas[9]->bloque_seis, 0, 1), 1);
        $seis += self::evaluar(substr($respuestas[9]->bloque_seis, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[9]->bloque_seis, 2, 1), 2);
        //Columna 1
        $seis += self::evaluar(substr($respuestas[11]->bloque_cinco, 0, 1), 2);
        $seis += self::evaluar(substr($respuestas[11]->bloque_cinco, 1, 1), 1);
        $seis += self::evaluar(substr($respuestas[11]->bloque_cinco, 2, 1), 1);

        return $seis;
    }

    public function siete($respuestas)
    {
        //Columna 12
        $siete = self::evaluar(substr($respuestas[0]->bloque_once, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[0]->bloque_once, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[0]->bloque_once, 2, 1), 2);
        //Columna 11
        $siete += self::evaluar(substr($respuestas[1]->bloque_nueve, 0, 1), 2);
        $siete += self::evaluar(substr($respuestas[1]->bloque_nueve, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[1]->bloque_nueve, 2, 1), 1);
        $siete += self::evaluar(substr($respuestas[1]->bloque_once, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[1]->bloque_once, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[1]->bloque_once, 2, 1), 2);
        //Columna 10
        $siete += self::evaluar(substr($respuestas[2]->bloque_trece, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[2]->bloque_trece, 1, 1), 2);
        $siete += self::evaluar(substr($respuestas[2]->bloque_trece, 2, 1), 1);
        //Columna 9
        $siete += self::evaluar(substr($respuestas[3]->bloque_catorce, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[3]->bloque_catorce, 1, 1), 2);
        $siete += self::evaluar(substr($respuestas[3]->bloque_catorce, 2, 1), 1);
        //Columna 8
        $siete += self::evaluar(substr($respuestas[4]->bloque_trece, 0, 1), 2);
        $siete += self::evaluar(substr($respuestas[4]->bloque_trece, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[4]->bloque_trece, 2, 1), 1);
        //Columna 6
        $siete += self::evaluar(substr($respuestas[6]->bloque_nueve, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[6]->bloque_nueve, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[6]->bloque_nueve, 2, 1), 2);
        $siete += self::evaluar(substr($respuestas[6]->bloque_trece, 0, 1), 2);
        $siete += self::evaluar(substr($respuestas[6]->bloque_trece, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[6]->bloque_trece, 2, 1), 1);
        //Columna 5
        $siete += self::evaluar(substr($respuestas[7]->bloque_nueve, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[7]->bloque_nueve, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[7]->bloque_nueve, 2, 1), 2);
        $siete += self::evaluar(substr($respuestas[7]->bloque_diez, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[7]->bloque_diez, 1, 1), 2);
        $siete += self::evaluar(substr($respuestas[7]->bloque_diez, 2, 1), 1);
        //Columna 3
        $siete += self::evaluar(substr($respuestas[9]->bloque_trece, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[9]->bloque_trece, 1, 1), 2);
        $siete += self::evaluar(substr($respuestas[9]->bloque_trece, 2, 1), 1);
        //Columna 2
        $siete += self::evaluar(substr($respuestas[10]->bloque_trece, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[10]->bloque_trece, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[10]->bloque_trece, 2, 1), 2);
        $siete += self::evaluar(substr($respuestas[10]->bloque_catorce, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[10]->bloque_catorce, 1, 1), 1);
        $siete += self::evaluar(substr($respuestas[10]->bloque_catorce, 2, 1), 2);
        //Columna 1
        $siete += self::evaluar(substr($respuestas[11]->bloque_ocho, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[11]->bloque_ocho, 1, 1), 2);
        $siete += self::evaluar(substr($respuestas[11]->bloque_ocho, 2, 1), 1);
        $siete += self::evaluar(substr($respuestas[11]->bloque_catorce, 0, 1), 1);
        $siete += self::evaluar(substr($respuestas[11]->bloque_catorce, 1, 1), 2);
        $siete += self::evaluar(substr($respuestas[11]->bloque_catorce, 2, 1), 1);

        return $siete;
    }

    public function ocho($respuestas)
    {
        //Columna 12
        $ocho = self::evaluar(substr($respuestas[0]->bloque_nueve, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[0]->bloque_nueve, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[0]->bloque_nueve, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[0]->bloque_catorce, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[0]->bloque_catorce, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[0]->bloque_catorce, 2, 1), 1);
        //Columna 11
        $ocho += self::evaluar(substr($respuestas[1]->bloque_nueve, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[1]->bloque_nueve, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[1]->bloque_nueve, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[1]->bloque_doce, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[1]->bloque_doce, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[1]->bloque_doce, 2, 1), 2);
        //Columna 10
        $ocho += self::evaluar(substr($respuestas[2]->bloque_ocho, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_ocho, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_ocho, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_diez, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_diez, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_diez, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_trece, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_trece, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_trece, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_catorce, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_catorce, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[2]->bloque_catorce, 2, 1), 2);
        //Columna 9
        $ocho += self::evaluar(substr($respuestas[3]->bloque_uno, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_uno, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_uno, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_tres, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_tres, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_tres, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_cuatro, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_cuatro, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_cuatro, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_seis, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_seis, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_seis, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_siete, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_siete, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_siete, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_catorce, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_catorce, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[3]->bloque_catorce, 2, 1), 1);
        //Columna 8
        $ocho += self::evaluar(substr($respuestas[4]->bloque_uno, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_uno, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_uno, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_ocho, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_ocho, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_ocho, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_nueve, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_nueve, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[4]->bloque_nueve, 2, 1), 2);
        //Columna 7
        $ocho += self::evaluar(substr($respuestas[5]->bloque_uno, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_uno, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_uno, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_tres, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_tres, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_tres, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_siete, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_siete, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_siete, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_trece, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_trece, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[5]->bloque_trece, 2, 1), 2);
        //Columna 6
        $ocho += self::evaluar(substr($respuestas[6]->bloque_nueve, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_nueve, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_nueve, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_once, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_once, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_once, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_trece, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_trece, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[6]->bloque_trece, 2, 1), 2);
        //Columna 5
        $ocho += self::evaluar(substr($respuestas[7]->bloque_dos, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_dos, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_dos, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_tres, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_tres, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_tres, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_cuatro, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_cuatro, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_cuatro, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_diez, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_diez, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_diez, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_trece, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_trece, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[7]->bloque_trece, 2, 1), 1);
        //Columna 4
        $ocho += self::evaluar(substr($respuestas[8]->bloque_siete, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_siete, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_siete, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_nueve, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_nueve, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_nueve, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_doce, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_doce, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[8]->bloque_doce, 2, 1), 1);
        //Columna 3
        $ocho += self::evaluar(substr($respuestas[9]->bloque_seis, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_seis, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_seis, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_ocho, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_ocho, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_ocho, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_nueve, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_nueve, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_nueve, 2, 1), 2);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_diez, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_diez, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_diez, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_doce, 0, 1), 1);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_doce, 1, 1), 2);
        $ocho += self::evaluar(substr($respuestas[9]->bloque_doce, 2, 1), 1);
        //Columna 2
        $ocho += self::evaluar(substr($respuestas[10]->bloque_siete, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[10]->bloque_siete, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[10]->bloque_siete, 2, 1), 1);
        $ocho += self::evaluar(substr($respuestas[10]->bloque_nueve, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[10]->bloque_nueve, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[10]->bloque_nueve, 2, 1), 1);
        //Columna 1
        $ocho += self::evaluar(substr($respuestas[11]->bloque_dos, 0, 1), 2);
        $ocho += self::evaluar(substr($respuestas[11]->bloque_dos, 1, 1), 1);
        $ocho += self::evaluar(substr($respuestas[11]->bloque_dos, 2, 1), 1);

        return $ocho;
    }

    public function nueve($respuestas)
    {
        //Columna 12
        $nueve = self::evaluar(substr($respuestas[0]->bloque_uno, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_uno, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_uno, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_tres, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_tres, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_tres, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_cinco, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_cinco, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_cinco, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_seis, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_seis, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_seis, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_siete, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_siete, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_siete, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_ocho, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_ocho, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_ocho, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_catorce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_catorce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[0]->bloque_catorce, 2, 1), 2);
        //Columna 11
        $nueve += self::evaluar(substr($respuestas[1]->bloque_seis, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_seis, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_seis, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_nueve, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_nueve, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_nueve, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_diez, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_diez, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_diez, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_doce, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_doce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_doce, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_catorce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_catorce, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[1]->bloque_catorce, 2, 1), 1);
        //Columna 10
        $nueve += self::evaluar(substr($respuestas[2]->bloque_cuatro, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_cuatro, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_cuatro, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_diez, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_diez, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_diez, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_doce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_doce, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_doce, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_trece, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_trece, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[2]->bloque_trece, 2, 1), 1);
        //Columna 9
        $nueve += self::evaluar(substr($respuestas[3]->bloque_uno, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_uno, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_uno, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_siete, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_siete, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_siete, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_nueve, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_nueve, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_nueve, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_once, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_once, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_once, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_catorce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_catorce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[3]->bloque_catorce, 2, 1), 2);
        //Columna 8
        $nueve += self::evaluar(substr($respuestas[4]->bloque_uno, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_uno, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_uno, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_dos, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_dos, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_dos, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_cuatro, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_cuatro, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[4]->bloque_cuatro, 2, 1), 1);
        //Columna 7
        $nueve += self::evaluar(substr($respuestas[5]->bloque_uno, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_uno, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_uno, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_tres, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_tres, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_tres, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_cinco, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_cinco, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_cinco, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_nueve, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_nueve, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_nueve, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_diez, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_diez, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[5]->bloque_diez, 2, 1), 1);
        //Columna 6
        $nueve += self::evaluar(substr($respuestas[6]->bloque_uno, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_uno, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_uno, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_ocho, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_ocho, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_ocho, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_once, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_once, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_once, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_doce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_doce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[6]->bloque_doce, 2, 1), 2);
        //Columna 5
        $nueve += self::evaluar(substr($respuestas[7]->bloque_tres, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_tres, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_tres, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_ocho, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_ocho, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_ocho, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_doce, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_doce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[7]->bloque_doce, 2, 1), 2);
        //Columna 4
        $nueve += self::evaluar(substr($respuestas[8]->bloque_tres, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_tres, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_tres, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_cuatro, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_cuatro, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_cuatro, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_seis, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_seis, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_seis, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_nueve, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_nueve, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_nueve, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_diez, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_diez, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_diez, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_trece, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_trece, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[8]->bloque_trece, 2, 1), 1);
        //Columna 3
        $nueve += self::evaluar(substr($respuestas[9]->bloque_uno, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_uno, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_uno, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_ocho, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_ocho, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_ocho, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_nueve, 0, 1), 2);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_nueve, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_nueve, 2, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_doce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_doce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_doce, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_catorce, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_catorce, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[9]->bloque_catorce, 2, 1), 2);
        //Columna 2
        $nueve += self::evaluar(substr($respuestas[10]->bloque_seis, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_seis, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_seis, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_diez, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_diez, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_diez, 2, 1), 2);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_trece, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_trece, 1, 1), 2);
        $nueve += self::evaluar(substr($respuestas[10]->bloque_trece, 2, 1), 1);
        //Columna 1
        $nueve += self::evaluar(substr($respuestas[11]->bloque_nueve, 0, 1), 1);
        $nueve += self::evaluar(substr($respuestas[11]->bloque_nueve, 1, 1), 1);
        $nueve += self::evaluar(substr($respuestas[11]->bloque_nueve, 2, 1), 2);

        return $nueve;
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
