<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request; 

class QuizController extends Controller
{ 

    //
    public function primera()
    {
        $parte_uno = file_get_contents('json/parte1.json');
        $preguntas_uno = json_decode($parte_uno);
        return view('quiz.parte1', compact('preguntas_uno'));
    }
    public function instrucciones(){
        //con esto puedo guardar el id del que lleno sus datos en session variables
        //session(['idCarrito' => '123456']);
        //dd(session('idCarrito'));
       // session()->forget('idCarrito');
        return view('instrucciones');
    }
    public function store(Request $request)
    {
        //imprimir dd($request->el) ;
        $this->validate($request, [
            'al' => 'required',
            'bl' => 'required',
            'cl' => 'required',
            'dl' => 'required', 
            'el' => 'required',
            'fl' => 'required'  
        ]);
        if ($request->al == $request->cl || $request->al==$request->bl || $request->bl==$request->cl) {  
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades abc, las respuestas de las 3 actividades de cada bloque deben ser diferentes');   
        }
        else if($request->dl == $request->el || $request->dl==$request->fl || $request->el==$request->fl){
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades def, las respuestas de las 3 actividades de cada bloque deben ser diferentes');   
        }
        else if($request->gl == $request->hl || $request->gl==$request->jl || $request->jl==$request->hl){
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades ghj, las respuestas de las 3 actividades de cada bloque deben ser diferentes');   
        }
        else if($request->kl == $request->ll || $request->kl==$request->ml || $request->ll==$request->ml){
            return redirect()->back()->with('alert', 'Respuestas invalidas en el grupo de actividades klm, las respuestas de las 3 actividades de cada bloque deben ser diferentes');   
        }
        else { 
            $bloque_uno=$request->al.$request->bl.$request->cl; //esto para todos los bloques de preguntas
            $bloque_dos=$request->dl.$request->el.$request->fl;
            $bloque_tres=$request->gl.$request->hl.$request->jl;
            $bloque_cuatro=$request->kl.$request->ll.$request->ml;
            return $bloque_uno.$bloque_dos.$bloque_tres.$bloque_cuatro;
        }
    }
}
