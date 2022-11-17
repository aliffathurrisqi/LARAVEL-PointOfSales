<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TransactionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, 'index']);

Route::get('/item', [ItemController::class, 'index']);
Route::post('/item', [ItemController::class, 'create']);
Route::post('/item/edit', [ItemController::class, 'edit']);
Route::post('/item/delete', [ItemController::class, 'destroy']);

Route::get('/sale', [TransactionController::class, 'index']);
Route::get('/sale/{transaction:note}', [TransactionController::class, 'show']);
