<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','QuizController@index');
Route::post('/crearPrueba','QuizController@iniciarPrueba');
Route::get('/instrucciones','QuizController@instrucciones')->middleware('checkquiz');
Route::get('/parte1','QuizOneController@primera')->middleware('checkquiz');
Route::get('/parte2','QuizTwoController@segunda')->middleware('checkquiz');
Route::get('/parte3','QuizThreeController@tercera')->middleware('checkquiz');
Route::post('/savePartOne','QuizOneController@store');
Route::get('/continuar','QuizController@load');
Route::post('/savePartTwo','QuizTwoController@store');
Route::post('continuarPrueba','QuizController@continuarPrueba');