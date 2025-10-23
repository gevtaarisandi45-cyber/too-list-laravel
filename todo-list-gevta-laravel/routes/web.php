<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todo', [TodoListController::class,'index']);
Route::get('/todo/tambah', [TodoListController::class,'tambah']);
Route::post('/todo/simpan', [TodoListController::class,'simpan']);
Route::delete('/hapus/{id}', [TodoListController::class,'hapus']);
Route::get('/todo/edit', [TodoListController::class,'edit']);
Route::put('/todo/update', [TodoListController::class,'update']);

