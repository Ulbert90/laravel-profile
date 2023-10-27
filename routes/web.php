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
    return view('index');
});

Route::get('/centaurapi', function () {
    return view('centaurapi');
})->name('centaurapi');

Route::get('/pegasus', function () {
    return view('pegasus');
})->name('pegasus');

Route::get('/dragon', function () {
    return view('dragon');
})->name('dragon');