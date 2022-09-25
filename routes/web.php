<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/antrian', [App\Http\Controllers\AntrianController::class, 'index']);
Route::get('/antrian_cs/{antri_cs}', [App\Http\Controllers\AntrianController::class, 'antri_cs']);
Route::get('/antrian_teller_1/{antri_teller_1}', [App\Http\Controllers\AntrianController::class, 'antri_teller1']);
Route::get('/antrian_teller_2/{antri_teller_2}', [App\Http\Controllers\AntrianController::class, 'antri_teller2']);
