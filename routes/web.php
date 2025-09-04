<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExplorerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/explorers', [ExplorerController::class, 'index'])->name('explorers.index');

Route::get('/explorers/create', [ExplorerController::class, 'create'])->name('explorers.create');

Route::get('/explorers/{id}', [ExplorerController::class, 'show'])->name('explorers.show');