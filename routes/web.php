<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/polls/create','PollController@create');
Route::post('/polls','PollController@store');
Route::get('/polls/{poll}','PollController@show');

Route::get('/polls/{poll}/questions/create','QuestionController@create');
Route::post('/polls/{poll}/questions','QuestionController@store');
Route::delete('/polls/{poll}/questions/{question}','QuestionController@destroy');

Route::get('/surveys/{poll}-{slug}','SurveyController@show');
Route::post('/surveys/{poll}-{slug}','SurveyController@store');

