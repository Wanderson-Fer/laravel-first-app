<?php

use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/home/{name?}', function ($name=null) {
    return view('home', ['nome'=>$name]);
})->where('name', '[A-Za-z]+');

Route::fallback(function () {
    return view('fail');
});
