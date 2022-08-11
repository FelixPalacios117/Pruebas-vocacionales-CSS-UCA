<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Pruebas\Prueba;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DateTime;

class QuizController extends Controller
{
    public function index()
    {
        if (session('id_prueba')) {
            return back()->withInput()->withErrors('No puedes regresar al formulario de inicio, ya tienes una prueba en curso');
        } else {
            return view('index');
        }
    }
    //
    public function instrucciones()
    {
        return view('instrucciones');
    }
    public function iniciarPrueba(Request $request)
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
        $edad = Carbon::createFromDate($date->format('Y'), $date->format('m'), $date->format('d'))->age;
        if ($edad < 15 || $edad > 55) {
            return back()->withInput()->withErrors('Debes ser mayor de 15 años e ingresar una fecha válida');
        }
        $prueba = new Prueba;
        $prueba->nombre = $request->nombre;
        $prueba->apellido = $request->apellido;
        $prueba->correo = $request->correo;
        $prueba->telefono = $request->telefono;
        $prueba->genero = $request->genero;
        $prueba->lugar_estudio = $request->lugar;
        $prueba->fecha_nacimiento = $request->fecha;
        $prueba->save();
        $id_prueba = DB::table('pruebas')->where('correo', $request->correo)->value('id');
        session(['id_prueba' => $id_prueba]);
        return redirect('/instrucciones');
    }
}
