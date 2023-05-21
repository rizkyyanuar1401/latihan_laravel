<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', PagesController::class . '@home');
Route::get('/about', PagesController::class . '@about');
Route::get('/mahasiswa', MahasiswaController::class . '@index');

// Route::get('/students', StudentsController::class . '@index');
// Route::get('/students/create', StudentsController::class . '@create');
// Route::get('/students/{student}', StudentsController::class . '@show');
// Route::post('/students', StudentsController::class . '@store');
// Route::delete('/students/{student}', StudentsController::class . '@destroy');
// Route::get('/students/{student}/edit', StudentsController::class . '@edit');
// Route::patch('/students/{student}', StudentsController::class . '@update');

Route::resource('students', StudentsController::class);
