<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\dashboardController;

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

Route::get('/', [dashboardController::class, 'index']);

 
Route::get('/clients', [ClientController::class, 'index']);

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

Route::post('/clients', [ClientController::class, 'store']);

Route::get('/clients/{id}', [ClientController::class, 'show']);

Route::get('/clients/{id}/edit', [ClientController::class, 'edit']);

Route::patch('/clients/{id}', [ClientController::class, 'update']);
 
Route::delete('/clients/{id}', [ClientController::class, 'destroy']);
////////////////////////////////////////////////////////////////////////////////

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/category', [CategoryController::class, 'store']);

Route::get('/category/{id}', [CategoryController::class, 'show']);

Route::get('/category/{id}/edit', [CategoryController::class, 'edit']);

Route::patch('/category/{id}', [CategoryController::class, 'update']);
 
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);
///////////////////////////////////////////////////////////////////////////////////
Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/create', [ProductController::class, 'create'])->name('categories.create');

Route::post('/products', [ProductController::class, 'store']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::get('/products/{id}/edit', [ProductController::class, 'edit']);

Route::patch('/products/{id}', [ProductController::class, 'update']);
 
Route::delete('/products/{id}', [ProductController::class, 'destroy']);
//////////////////////////////////////////////////////////////////////////////////////

Route::get('/sales', [App\Http\Controllers\SaleController::class, 'index']);

Route::get('/sales/create', [App\Http\Controllers\SaleController::class, 'create'])->name('sales.create');

Route::post('/sales', [App\Http\Controllers\SaleController::class,'store']);

Route::get('/sales/{id}', [App\Http\Controllers\SaleController::class,'show']);

Route::get('/sales/{id}/edit', [App\Http\Controllers\SaleController::class, 'edit']);

Route::patch('/sales/{id}', [App\Http\Controllers\SaleController::class, 'update']);
 
Route::delete('/sales/{id}', [App\Http\Controllers\SaleController::class, 'destroy']);
