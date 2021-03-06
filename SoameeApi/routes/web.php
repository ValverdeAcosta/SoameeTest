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
    return view('welcome');
});

Route::get('/books', [App\Http\Controllers\BooksController::class, 'show']);
Route::get('/book/{id}', [App\Http\Controllers\BooksController::class, 'filter']);
Route::get('/authors', [App\Http\Controllers\AuthorsController::class, 'show']);
Route::get('/author/{id}', [App\Http\Controllers\AuthorsController::class, 'filter']);

Route::post('/author', [App\Http\Controllers\AuthorsController::class, 'store']);
Route::post('/book', [App\Http\Controllers\BooksController::class, 'store']);