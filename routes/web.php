<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExplorerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/explorers', [ExplorerController::class, 'index'])->name('explorers.index');

Route::get('/explorers/create', [ExplorerController::class, 'create'])->name('explorers.create');

// Route::get('/explorers/{id}', [ExplorerController::class, 'show'])->name('explorers.show');
Route::get('/explorers/{explorer}', [ExplorerController::class, 'show'])->name('explorers.show');

Route::post('/explorers', [ExplorerController::class, 'store'])->name('explorers.store');

// Route::delete('/explorers/{id}', [ExplorerController::class, 'destroy'])->name('explorers.destroy');

Route::delete('/explorers/{explorer}', [ExplorerController::class, 'destroy'])->name('explorers.destroy');

Route::get('/explorers/{explorer}/edit', [ExplorerController::class, 'edit'])->name('explorers.edit');

Route::put('/explorers/{explorer}', [ExplorerController::class, 'update'])->name('explorers.update');