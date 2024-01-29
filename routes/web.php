<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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


Route::get('/clients', [ClientController::class, 'index']);

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

Route::post('/clients', [ClientController::class, 'store']);

Route::get('/clients/{id}', [ClientController::class, 'show']);

Route::get('/clients/{id}/edit', [ClientController::class, 'edit']);

Route::patch('/clients/{id}', [ClientController::class, 'update']);
 
Route::delete('/clients/{id}', [ClientController::class, 'destroy']);





