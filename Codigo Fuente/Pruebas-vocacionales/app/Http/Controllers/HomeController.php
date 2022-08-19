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
    public function index()
    {
        $pruebas = DB::table('pruebas')
            ->select('id','nombre','apellido','genero','correo','telefono','updated_at')
            ->where([
            'finalizado' => 1
            ])
            ->orderByDesc('updated_at')
            ->paginate(1);
            //->get();
        return view('home', compact('pruebas'));
    }
}
