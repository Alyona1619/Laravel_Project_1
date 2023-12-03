<?php

# task Laravel: Beginning
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'show']);
Route::post('/test', [TestController::class, 'store']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'storeData']);

Route::get('/data', [FormController::class, 'showData']);


#task Laravel: working with data

use App\Http\Controllers\DataController;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/data', [DataController::class, 'index'])->name('data.index');
Route::get('/data/{id}', [DataController::class, 'show'])->name('data.show');
Route::get('/data/create', [DataController::class, 'create'])->name('data.create');
Route::post('/data', [DataController::class, 'store'])->name('data.store');
Route::get('/data/{id}/edit', [DataController::class, 'edit'])->name('data.edit');
Route::put('/data/{id}', [DataController::class, 'update'])->name('data.update');
Route::delete('/data/{id}', [DataController::class, 'destroy'])->name('data.destroy');

Route::get('/users/{user}/softdelete', [UserController::class, 'softDelete'])->name('users.softdelete');
Route::get('/data/{data}/softdelete', [DataController::class, 'softDelete'])->name('data.softdelete');



