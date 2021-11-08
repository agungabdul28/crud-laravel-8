<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LecturersController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\FacultiesController;
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
//     return view('index');
// });


// // menambahkan root baru page about
// Route::get('/about', function () {
//     $nama = 'Agung Abdul';
//     return view('about', ['nama' => $nama]);
// });

// // menambahkan root baru page mahasiswa
// Route::get('/mahasiswa', function () {
//     $mhs = 'Agung';
//     return view('mahasiswa', ['nama' => $mhs]);
// });

Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// // student 
// Route::get('/students', [StudentsController::class, 'index']);
// Route::get('/students/create', [StudentsController::class, 'create']);
// Route::get('/students/{student}', [StudentsController::class, 'show']);
// Route::post('/students', [StudentsController::class, 'store']);
// Route::delete('/students/{student}', [StudentsController::class, 'destroy']);
// // mengambi data gunakan meth get
// Route::get('/students/{student}/edit', [StudentsController::class, 'edit']);
// Route::patch('/students/{student}', [StudentsController::class, 'update']);
// resoure rut metode magic
Route::resource('students', StudentsController::class);
// lecturer
Route::get('/lecturers', [LecturersController::class, 'index']);
Route::get('/lecturers/create', [LecturersController::class, 'create']);
Route::get('/lecturers/{lecturer}', [LecturersController::class, 'show'])->name('detail');
Route::post('/lecturers', [LecturersController::class, 'store']);
Route::delete('/lecturers/{lecturer}', [LecturersController::class, 'destroy']);
Route::get('/lecturers/{lecturer}', [LecturersController::class, 'edit']);
Route::patch('/lecturers/{lecturer}', [LecturersController::class, 'update']);

// fakultas
Route::get('/faculties', [FacultiesController::class, 'index']);
