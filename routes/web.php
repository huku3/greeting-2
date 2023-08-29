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
});

Route::get('comments/random', [\App\Http\Controllers\GreetingController::class, 'random']);

Route::get('/comments/{operetor}', [\App\Http\Controllers\GreetingController::class, 'operetor']);

Route::get('comments/freeword/{word}', [\App\Http\Controllers\GreetingController::class, 'word']);
