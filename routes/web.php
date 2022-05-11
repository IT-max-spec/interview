<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/', [KaryawanController::class, 'Index']);
Route::get('/create', [KaryawanController::class, 'create']);
Route::get('/preview', [KaryawanController::class, 'preview']);
Route::post('/store', [KaryawanController::class, 'store']);
Route::post('/store', [KaryawanController::class, 'store']);
Route::get('/show/{id}', [KaryawanController::class, 'show']);
Route::post('/update/{id}', [KaryawanController::class, 'update']);
