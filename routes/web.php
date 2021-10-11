<?php

use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\web\WebController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('index');

// Route::get('/pruebas/{nombre}', function ($nombre) {
//     return "Hola $nombre, conócenos <a href='".route("nosotros")."'>nosotros</a>";
// });

// Route::get('/sobre-nosotros', function () {
//     return "<h1>Toda la informacion sobre nosotros</h1>";
// })->name("nosotros");

// Route::get('home/{name}/{apellido}', function ($name,$apellido) {
//     $posts=["Opcion1","Opcion2","Opcion3","Opcion4"];
//     return view('home',['posts'=>$posts,'name'=>$name,'apellido'=>$apellido]);
// })->name('home');

// Route::get('/post', [PostController::class,"index"]);

Route::resource('dashboard/post', PostController::class);
Route::resource('dashboard/user', UserController::class);
Route::post('dashboard/post/{post}/image', [PostController::class,'image'])->name('post.image');
Route::resource('dashboard/category', CategoryController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/detail/{id}', [WebController::class, 'detail']);
Route::get('/category/{id}', [WebController::class, 'category']);
Route::get('/contact', [WebController::class, 'contact']);
