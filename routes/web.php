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
Route::get('/create', [BbsController::class, 'showCreateForm']);
Route::post('/create', [BbsController::class, 'create']);

Route::get('/edit/{id}', [BbsController::class, 'showEditFrom'])->name('edit');
Route::post('/edit/{id}', [BbsController::class, 'edit']);

Route::post('/delete{id}', [BbsController::class, 'delete'])->name('delete');

Route::get('/view/{id}', [BbsController::class, 'view'])->name('view');
Route::post('/view/{id}/create', [BbsController::class, 'replyCreate'])->name('reply');
