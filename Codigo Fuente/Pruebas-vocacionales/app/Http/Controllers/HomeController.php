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
                    ->select('id','nombre','apellido','genero','correo','telefono','finalizado','revisado','updated_at')
                    ->where([
                        ['nombre','LIKE','%'.$cadena.'%'],
                        ['finalizado','=','1']
                        ])
                    ->orwhere([
                        ['apellido','LIKE','%'.$cadena.'%'],
                        ['finalizado','=','1']
                        ])
                    ->orwhere([
                        ['correo','LIKE','%'.$cadena.'%'],
                        ['finalizado','=','1']
                        ])
                    ->orderByDesc('updated_at')
                    ->paginate(20);
                return view('home', compact('pruebas','cadena'));
            }
        }else if($request->btnRefrescar){
            $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','updated_at')
                ->where([
                    'finalizado' => 1
                    ])
                ->orderByDesc('updated_at')
                ->paginate(20);
            return redirect('/home');
        } else if($request->btnFiltrar){
            $filtro = $request->get('filtro');
            $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','finalizado','revisado','updated_at')
                ->where([
                    ['finalizado','=','1'],
                    ['revisado','=',$filtro]
                    ])
                ->orderByDesc('updated_at')
                ->paginate(20);
            return view('home', compact('pruebas'));
        } else{
            $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','revisado','updated_at')
                ->where([
                    'finalizado' => 1
                ])
                ->orderByDesc('updated_at')
                ->paginate(20);
            return view('home', compact('pruebas'));
        }
    }
}