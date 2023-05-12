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
// instead of using above

Route::prefix('jogos')->group(function(){
    Route::get('/', [jogosController::class, 'index'])->name('jogos.index');

    Route::get('/create', [jogosController::class, 'create'])->name('jogos.create');
    Route::post('/', [jogosController::class, 'store'])->name('jogos.store');
});

Route::fallback(function () {
    return view('jogos/fail');
});
