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

Route::get('/kelas-satu', function () {
    return view('kelasSatu');
});

Route::get('/kelas-dua', function () {
    return view('kelasDua');
});

Route::get('/kelas-tiga', function () {
    return view('kelasTiga');
});

Route::get('/satu-A', function () {
    return view('satuAPSTI');
});

Route::get('/satu-B', function () {
    return view('satuBPSTI');
});