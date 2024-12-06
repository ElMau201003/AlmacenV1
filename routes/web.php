<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InstitucionController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//Autenticación
Route::get('/register', [RegisteredUserController::class, 'create'])
            ->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
            ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::controller(InstitucionController::class)->group(function() {
    Route::get('institucion', 'index');
    Route::get('institucion/create', 'create');
    Route::get('institucion/{codigoi}', 'show');
});

