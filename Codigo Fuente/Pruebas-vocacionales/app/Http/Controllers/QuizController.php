<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;
use Pruebas\Prueba;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DateTime;
use Mail;

class QuizController extends Controller
{
    public function index()
    {
        if (session('id_prueba')) {
            return back()->withInput()->withErrors('No puedes regresar al formulario de inicio, ya tienes una prueba en curso');
        } else {
            session()->forget('completa');
            return view('index');
        }
    }
    public function load(){
        return view('continuar');
    }
    public function continuarPrueba(Request $request){
        $this->validate($request, [ 
            'correo' => 'required|email',
            'contraseña' => 'required'
        ]);
        $prueba = DB::table('pruebas')
            ->where([
            'correo'=>$request->correo,
            'finalizado'=>false
            ])->first();
        if($prueba && Hash::check($request->contraseña, $prueba->contrasenia)){
            session(['id_prueba' => $prueba->id]);
            return redirect('/instrucciones');
        } else {
            return back()->withInput()->withErrors('El correo electrónico ingresado no tiene ninguna prueba sin completar o los datos ingresados son incorrectos.');
        }
    }
    
    public function instrucciones()
    { 
        return view('instrucciones');
    }
    public function iniciarPrueba(Request $request)
    { 
        $this->validate($request, [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'correo' => 'required|email|unique:pruebas,correo',
            'telefono' => 'required|unique:pruebas,telefono',
            'genero' => 'required',
            'lugar' => 'required',
            'fecha' => 'required|date',
            'contraseña' => 'required|min:8|same:repetir_contraseña|string',
            'repetir_contraseña' => 'required|min:8|string'
        ]);
        $date = new DateTime($request->fecha);
        $edad = Carbon::createFromDate($date->format('Y'), $date->format('m'), $date->format('d'))->age;
        if ($edad < 15 || $edad > 50) {
            return back()->withInput()->withErrors('Debes ser mayor de 15 años e ingresar una fecha válida');
        }
        $prueba = new Prueba;
        $prueba->nombre = $request->nombre;
        $prueba->apellido = $request->apellido;
        $prueba->contrasenia = Hash::make($request->contraseña);
        $prueba->codigo_verificacion = str_random(25);
        $prueba->correo = $request->correo;
        $prueba->telefono = $request->telefono;
        $prueba->genero = $request->genero;
        $prueba->lugar_estudio = $request->lugar;
        $prueba->fecha_nacimiento = $request->fecha;
        $prueba->finalizado = false;
        $prueba->revisado = false;
        $prueba->save();

        $data['codigo_verificacion'] = $prueba->codigo_verificacion;
        $data['correo'] = $request->correo;
        $data['nombre'] = $request->nombre;

       Mail::send('emails.confirmacion', $data, function($message) use ($data) {
            $message->to($data['correo'], $data['nombre'])
            ->subject('Por favor confirma tu correo');
        });
        return view('correoenviado',compact('prueba')); 
    }

    public function verificar($codigo){
        $prueba = DB::table('pruebas')
            ->where([
            'codigo_verificacion' => $codigo,
            ])->first();

            if(! $prueba){
                return redirect('/');
            }else {
                DB::table('pruebas')
                ->where([
                    'codigo_verificacion' => $codigo,
                    ])
                ->update([
                    'verificado' => '1',
                    'codigo_verificacion'=>null
                ]);
                $id_prueba = DB::table('pruebas')->where('correo', $prueba->correo)->value('id');
                session(['id_prueba' => $id_prueba]);
                return redirect('/instrucciones')->with('notification', 'Has confirmado correctamente tu correo!');
            }
    }

    public function finalPrueba()
    {
        return view('final');
    }
}
