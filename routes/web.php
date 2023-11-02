<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestController::class, 'show']);
Route::post('/test', [TestController::class, 'store']);

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/form', [FormController::class, 'storeData']);

Route::get('/data', [FormController::class, 'showData']);


