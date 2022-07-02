<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;

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

Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/create/{id}', [BbsController::class, 'showCreateForm'])->name('create');
Route::post('/create{id}', [BbsController::class, 'create']);

Route::get('/edit/{id}', [BbsController::class, 'showEditFrom'])->name('edit');
Route::post('/edit/{id}', [BbsController::class, 'edit']);

// Route::get('/delete', [BbsController::class, 'delete']);
