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
Route::get('/instrucciones','QuizController@instrucciones');
Route::get('/parte1','QuizOneController@primera');
Route::get('/parte2','QuizTwoController@segunda');
Route::post('/savePartOne','QuizOneController@store');
Route::post('/savePartTwo','QuizTwoController@store');