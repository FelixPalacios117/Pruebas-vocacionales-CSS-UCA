<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->btnBuscar){
            $cadena = $request->get('buscador');
            if($cadena!=""){
                $pruebas = DB::table('pruebas')
                    ->select('id','nombre','apellido','genero','correo','telefono','updated_at')
                    ->where('nombre','LIKE','%'.$cadena.'%')
                    ->orwhere('apellido','LIKE','%'.$cadena.'%')
                    ->orwhere('correo','LIKE','%'.$cadena.'%')
                    ->orderByDesc('updated_at')
                    ->paginate(2);
                return view('home', compact('pruebas','cadena'));
            }
        }else if($request->btnRefrescar){
                $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','updated_at')
                //->where([
                //'finalizado' => 1
                //])
             ->orderByDesc('updated_at')
                ->paginate(2);
            //return view('home', compact('pruebas'));
            return redirect('/home');
        } else{
            $pruebas = DB::table('pruebas')
            ->select('id','nombre','apellido','genero','correo','telefono','updated_at')
            //->where([
            //'finalizado' => 1
            //])
            ->orderByDesc('updated_at')
            ->paginate(2);
        return view('home', compact('pruebas'));
        }
    }
}