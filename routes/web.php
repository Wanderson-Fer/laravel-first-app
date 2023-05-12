<?php

use App\Http\Controllers\jogosController;

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

// Route::get('/jogos', [jogosController::class, 'index'])->name('jogos.index');

Route::fallback(function () {
    return view('fail');
});
