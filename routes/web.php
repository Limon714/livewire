<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\helloController;
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
Route::get('/conn', function () {
    return view('dbconn');
});

Route::get('/home', function () {
    return view('home');
});







Route::get('/hellocontroller', [helloController::class, 'hello']);
Route::get('/hellocontroller', [helloController::class, 'hi']);
Route::get('/mylara/{id}', [helloController::class, 'mylara']);
Route::get('/home/{name}/{role}/{dept}', [helloController::class, 'multilara']);








Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
