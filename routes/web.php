<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;





Route::get('/', [TodoController::class,'allList'])->name('main');
Route::get('/todo', [TodoController::class,'index']);
Route::post('/todo', [TodoController::class,'store'])->name('todo.store');
Route::get('/todo/{todo}', [TodoController::class,'edit'])->name('todo.edit');
Route::put('/todo/{todo}', [TodoController::class,'update'])->name('todo.update');
Route::delete('/todo/{todo}', [TodoController::class,'destroy'])->name('todo.delete');
