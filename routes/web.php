<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExplorerController;

Route::get('/', function () {
    return view('welcome');
});

// Logout Route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Signup and Login Routes
Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// CRUD Routes
Route::middleware('auth')->controller(ExplorerController::class)->group(function () {
    Route::get('/explorers', [ExplorerController::class, 'index'])->name('explorers.index');

    Route::get('/explorers/create', [ExplorerController::class, 'create'])->name('explorers.create')->middleware('auth');

    // Route::get('/explorers/{id}', [ExplorerController::class, 'show'])->name('explorers.show');
    Route::get('/explorers/{explorer}', [ExplorerController::class, 'show'])->name('explorers.show');

    Route::post('/explorers', [ExplorerController::class, 'store'])->name('explorers.store');

    // Route::delete('/explorers/{id}', [ExplorerController::class, 'destroy'])->name('explorers.destroy');

    Route::delete('/explorers/{explorer}', [ExplorerController::class, 'destroy'])->name('explorers.destroy');

    Route::get('/explorers/{explorer}/edit', [ExplorerController::class, 'edit'])->name('explorers.edit');

    Route::put('/explorers/{explorer}', [ExplorerController::class, 'update'])->name('explorers.update');
});
