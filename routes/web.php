<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PoliticasController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        // 'canLogin' => Route::has('login'),
        // 'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// Policias legales
Route::get('/aviso-legal', [PoliticasController::class, 'avisoLegal'])->name('aviso-legal');
Route::get('/politica-privacidad', [PoliticasController::class, 'privacidad'])->name('privacidad');
Route::get('/politica-cookies', [PoliticasController::class, 'cookies'])->name('cookies');

require __DIR__.'/auth.php';
