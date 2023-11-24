<?php

use App\Http\Controllers\ReclamationContoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();
// Route::resource('courses', ReclamationContoller::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('Reclamation', [ReclamationContoller::class, 'index'])->name('reclamation');
Route::resource('/createNewReclamation', ReclamationContoller::class);
Route::post('/createNewReclamation', [ReclamationContoller::class, 'store'])->name('createNewReclamation');