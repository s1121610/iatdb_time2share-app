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
Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/sushi/create', [App\Http\Controllers\SushiController::class, 'create']);
    Route::post('/sushi', [App\Http\Controllers\SushiController::class, 'store']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/sushi', [\App\Http\Controllers\SushiController::class, 'index']);
    Route::get('/sushi/{id}', [\App\Http\Controllers\SushiController::class, 'show']);
    Route::get('/', [\App\Http\Controllers\SushiController::class, 'index']);
});

Route::middleware(['auth', 'age'])->group(function(){
    Route::get('/drinks', [App\Http\Controllers\DrinksController::class, 'index']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
