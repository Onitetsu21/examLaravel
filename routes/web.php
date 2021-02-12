<?php

use App\Http\Controllers\CommandController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/commands', [ CommandController::class, 'Home']);
Route::get('/create', [CommandController::class, 'CreateCommand'])->name('CreateCommand');
Route::post('/create', [CommandController::class, 'CreateCommandPost'])->name('CreateCommandPost');
Route::get('/{command:id}', [ CommandController::class, 'UpdateCommand' ])->name('CommandEdit');
Route::patch('/{command:id}', [ CommandController::class, 'UpdateCommandPost' ])->name("UpdateCommand");
Route::delete('/{command:id}', [CommandController::class, 'DeleteCommand'])->name('DeleteCommand');
