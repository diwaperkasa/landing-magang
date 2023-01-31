<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa;

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

Route::get('/', [Mahasiswa::class, 'homepage']);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::get('/mahasiswa', [Mahasiswa::class, 'index']);
Route::get('/mahasiswa/create', [Mahasiswa::class, 'create']);
Route::post('/mahasiswa/create', [Mahasiswa::class, 'post']);
Route::get('/mahasiswa/edit/{id}', [Mahasiswa::class, 'edit']);
Route::post('/mahasiswa/edit/{id}', [Mahasiswa::class, 'postEdit']);
Route::post('/mahasiswa/delete/{id}', [Mahasiswa::class, 'delete']);