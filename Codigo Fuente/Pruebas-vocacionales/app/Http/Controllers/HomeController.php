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
            $filtro = $request->get('filtro');
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

                if($filtro==0){
                    $filtro = "Sin revisar";
                }else {
                    $filtro = "Revisado";
                }
                return view('home', compact('pruebas','cadena','filtro'));
            }
        }else if($request->btnRefrescar){
            $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','updated_at')
                ->where([
                    'finalizado' => 1
                    ])
                ->orderByDesc('updated_at')
                ->paginate(20);
                return redirect(env('APP_URL').'home');
        } else if($request->btnFiltrar){
            $cadena = $request->get('buscador');
            $filtro = $request->get('filtro');
            $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','finalizado','revisado','updated_at')
                ->where([
                    ['finalizado','=','1'],
                    ['revisado','=',$filtro]
                    ])
                ->orderByDesc('updated_at')
                ->paginate(20);
                
            if($filtro==0){
                $filtro = "Sin revisar";
            }else {
                $filtro = "Revisado";
            }
            return view('home', compact('pruebas','cadena','filtro'));
        } else{
            $cadena = $request->get('buscador');
            $filtro = $request->get('filtro');
            $pruebas = DB::table('pruebas')
                ->select('id','nombre','apellido','genero','correo','telefono','revisado','updated_at')
                ->where([
                    'finalizado' => 1
                ])
                ->orderByDesc('updated_at')
                ->paginate(20);
            
            if($filtro==0){
                $filtro = "Sin revisar";
            }else {
                $filtro = "Revisado";
            }
            return view('home', compact('pruebas','cadena','filtro'));
        }
    }
}