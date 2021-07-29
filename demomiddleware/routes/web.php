<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index']);
Route::middleware('auth')->group(function(){  
    Route::get('libros/create', [App\Http\Controllers\LibroController::class, 'create'])->name('libros.create')->middleware('soloadmin');
    Route::post('libros', [App\Http\Controllers\LibroController::class, 'store'])->name('libros.store')->middleware('soloadmin');
    Route::get('libros/', [App\Http\Controllers\LibroController::class, 'index'])->name('libros.index');
    Route::get('libros/{id}', [App\Http\Controllers\LibroController::class, 'show'])->name('libros.show');
    Route::delete('libros/{id}', [App\Http\Controllers\LibroController::class, 'destroy'])->name('libros.destroy')->middleware('soloadmin');
});

Route::group(['middleware' => ['XssSanitizer']], function () {
    Route::get('libros/create', [App\Http\Controllers\LibroController::class, 'create'])->name('libros.create')->middleware('soloadmin');
    Route::post('libros', [App\Http\Controllers\LibroController::class, 'store'])->name('libros.store')->middleware('soloadmin');
    });




