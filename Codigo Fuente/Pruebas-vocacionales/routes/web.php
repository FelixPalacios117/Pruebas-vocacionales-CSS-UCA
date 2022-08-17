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
Route::get('/parte7','QuizSevenController@septima')->middleware('checkquiz');
Route::get('/parte8','QuizEightController@octava')->middleware('checkquiz');
Route::get('/continuar','QuizController@load');
Route::post('/savePartOne','QuizOneController@store');
Route::post('/savePartTwo','QuizTwoController@store');
Route::post('/savePartThree','QuizThreeController@store');
Route::post('/savePartSeven','QuizSevenController@store');
Route::post('/savePartEight','QuizEightController@store');
Route::post('/savePartFive','QuizFiveController@store');
Route::post('/savePartFour','QuizFourController@store');
Route::post('/savePartSix','QuizSixController@store');
Route::post('continuarPrueba','QuizController@continuarPrueba');
Route::get('/parte4','QuizFourController@cuarta')->middleware('checkquiz');
Route::get('/parte5','QuizFiveController@quinta')->middleware('checkquiz');
Route::get('/parte6','QuizSixController@sexta')->middleware('checkquiz');