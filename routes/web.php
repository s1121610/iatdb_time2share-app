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
});

Route::middleware(['auth'])->group(function(){
    Route::get('/sushi', [\App\Http\Controllers\SushiController::class, 'index']);
    Route::get('/aanbod/create', [App\Http\Controllers\AanbodController::class, 'create']);
    Route::post('/aanbod/{id}/create', [\App\Http\Controllers\DetailsController::class, 'post']);
});
 
Route::get('/aanbod/{id}', [\App\Http\Controllers\DetailsController::class, 'show']);
Route::get('/aanbod/filter/{category}', [\App\Http\Controllers\AanbodController::class, 'showCat']);

Route::get('/', [\App\Http\Controllers\AanbodController::class, 'home']);
Route::get('/aanbod', [App\Http\Controllers\AanbodController::class, 'show']);
Route::post('/aanbod', [App\Http\Controllers\AanbodController::class, 'store']);


Route::middleware(['auth', 'age'])->group(function(){
    Route::get('/drinks', [App\Http\Controllers\DrinksController::class, 'index']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
