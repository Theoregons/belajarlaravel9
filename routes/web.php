<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return 'Ini laravel saya';
});

Route::get('data/{nilai}', function ($nilai) {
    return $nilai;
});

Route::get('penjumlahan/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return $nilai1 + $nilai2;
});

Route::get('data-request', function (Request $request) {
    return $request;
});
