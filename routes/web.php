<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', HomeController::class);


Route::get('cursos', [CursoController::class,'index']);

Route::get('cursos/create', [CursoController::class,'create']);

Route::get('cursos/{curso}', [CursoController::class,'show']);



/*Route::get('cursos/create', function () {
    return "En esta pagina podras crear un curso";
});*/