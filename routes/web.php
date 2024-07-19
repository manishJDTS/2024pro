<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [StudentController::class,  'index'])->name('students.index');
Route::post('store', [StudentController::class,  'store'])->name('students.store');
//login after authenticate
Route::get('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logins', [LoginController::class, 'authenticates'])->name('logins');

// blog listing

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {
    Route::get('blogs', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/blogs/create', [BlogController::class, 'b_create'])->name('blogs.b_create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');