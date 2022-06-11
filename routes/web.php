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
    return inertia('home');
});

Route::get('/taarten', function () {
    return inertia('taarten');
});

Route::get('/gebak', function () {
    return inertia('gebak');
});

Route::get('/vlaaien', function () {
    return inertia('vlaaien');
});
