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
    return view('application/homepage', [
        "title" => 'Beranda'
    ]);
});

Route::get('/list', function () {
    return view('application/listdata', [
        "title" => 'List Data'
    ]);
});

Route::get('/lowongan', function () {
    return view('application/jobs', [
        "title" => 'Lowongan'
    ]);
});

Route::get('/artikel', function () {
    return view('application/artikel', [
        "title" => 'Artikel'
    ]);
});

Route::get('/lowongan/detail', function () {
    return view('application/jobdetail');
});
