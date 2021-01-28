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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Ruta de cursos
Route::resource('/courses',App\Http\Controllers\CourseController::class)->names('courses');
//Ruta de unidad-formativa
Route::resource('/training-units',App\Http\Controllers\TrainingUnitController::class)->names('training-units');
//Ruta de profesores
Route::resource('/teachers',App\Http\Controllers\TeacherController::class)->names('teachers');
//Ruta de alumnos
Route::resource('/students',App\Http\Controllers\StudentController::class)->names('students');

Route::get('/admin',function (){
    return view('admin');
});
