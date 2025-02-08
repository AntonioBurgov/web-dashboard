<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ButtonController;

Route::get('/', [ButtonController::class, 'index']);
Route::get('/button/{id}', [ButtonController::class, 'showButton'])->name('button.show');
Route::get('/button/configure/{id}', [ButtonController::class, 'configure'])->name('button.configure');
Route::post('/button/configure/{id}', [ButtonController::class, 'saveConfiguration'])->name('button.saveConfiguration');

