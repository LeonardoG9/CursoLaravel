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

Route::get('/pruebas/{nombre}', function ($nombre) {
    return "Hola $nombre, conócenos <a href='".route("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros', function () {
    return "<h1>Toda la informacion sobre nosotros</h1>";
})->name("nosotros");

Route::get('home/{name}/{apellido}', function ($name,$apellido) {
    return view('home',['name'=>$name,'apellido'=>$apellido]);
})->name('home');