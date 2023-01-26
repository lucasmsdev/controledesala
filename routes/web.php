<?php
        use Illuminate\Support\Facades\DB;
use App\Http\Controllers\FuncionarioController;
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


    


    Route::get('/','App\Http\Controllers\FuncionarioController@index')->name('index');

Route::get('/home','App\Http\Controllers\FuncionarioController@home')->name('home');

Route::get('/login','App\Http\Controllers\FuncionarioController@login')->name('login');

Route::get('/cadastro','App\Http\Controllers\FuncionarioController@getTipo')->name('cadastro');


Route::post('/cadastro','App\Http\Controllers\FuncionarioController@addFuncionario');

Route::post('/login','App\Http\Controllers\FuncionarioController@loginFuncionario');
