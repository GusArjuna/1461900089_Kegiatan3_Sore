<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pertemuan3Controller;

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

Route::get('/', [Pertemuan3Controller::class, 'index']);
Route::post('/', [Pertemuan3Controller::class, 'store']);
Route::get('/add0089', [Pertemuan3Controller::class, 'create']);
Route::get('/edit0089/{id}', [Pertemuan3Controller::class, 'edit']);
Route::post('/edit0089/{id}', [Pertemuan3Controller::class, 'update']);
Route::get('/delete/{id}', [Pertemuan3Controller::class, 'destroy']);
