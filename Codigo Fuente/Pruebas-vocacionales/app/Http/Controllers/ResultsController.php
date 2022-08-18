<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    //
    public function index(){
        return view('admin.resultados');
    }
}
