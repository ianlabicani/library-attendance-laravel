<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::get('/student/search', [StudentController::class, 'search'])->name('student.search');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show');
Route::get('/session', [SessionController::class, 'index'])->name('session.index');
Route::get('/session/store', [SessionController::class, 'store'])->name('session.store');
