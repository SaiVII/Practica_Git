<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\App; // Asegúrate de importar App

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

//App::setLocale('es');  Uso correcto de App::setLocale

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/crear', [ProjectController::class, 'create'])->name('projects.create');

Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show');

Route::view('/contact', 'contact')->name('contact');
route::post('contact','MesaggesController@store')->name('mesagges.store');