<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Book;

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

Route::get('/', [\App\Http\Controllers\BookController::class, 'index']);
Route::get('/books', [\App\Http\Controllers\BookController::class, 'index']);
Route::get('/books/{book}', [\App\Http\Controllers\BookController::class, 'show']);
