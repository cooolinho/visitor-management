<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('app.home');

Route::get('/visitor', [VisitorController::class, 'index'])->name('app.visitor.index');
Route::get('/visitor/create', [VisitorController::class, 'create'])->name('app.visitor.create');
Route::post('/visitor/store', [VisitorController::class, 'store'])->name('app.visitor.store');
Route::get('/visitor/{visitor}/show', [VisitorController::class, 'show'])->name('app.visitor.show');
Route::get('/visitor/{visitor}/edit', [VisitorController::class, 'edit'])->name('app.visitor.edit');
Route::post('/visitor/{visitor}/update', [VisitorController::class, 'update'])->name('app.visitor.update');
Route::post('/visitor/{visitor}/destroy', [VisitorController::class, 'destroy'])->name('app.visitor.destroy');
