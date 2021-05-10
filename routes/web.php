<?php

use App\Http\Controllers\CarreraController;
use Illuminate\Support\Facades\Artisan;
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
//auth.login
Route::get('/', function () {
    return view('principal');
});

Route::resource('carrera', \App\Http\Controllers\CarreraController::class);
Route::resource('ver', \App\Http\Controllers\VerController::class);

//Route::get('carrera/ver','CarreraController@ver')->name('carrera.ver');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.'], function() {
        Route::resource('lessons', \App\Http\Controllers\Students\LessonController::class);
    });
   Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.'], function() {
       Route::resource('courses', \App\Http\Controllers\Teachers\CourseController::class);
       
   });
    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        Route::resource('empresa', \App\Http\Controllers\EmpresaController::class);
        Route::resource('proyecto', \App\Http\Controllers\ProyectoController::class);       
        Route::resource('equipo', \App\Http\Controllers\EquipoController::class);       
    });
});
