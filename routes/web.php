<?php

use App\Http\Controllers\StudentController;
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

Route::get('/allStudent/{id}',function($id){

    return $id;
});


Route::get('/student',[StudentController::class,'index']);

Route::get('student/{nom}/{prenom}/{age}/{taille}',[StudentController::class,'addStudent']);

Route::get('students/all',[StudentController::class,'getAllStudents']);

Route::get('/student/{id}',[StudentController::class,'getStudentById']);
