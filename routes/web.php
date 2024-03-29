<?php

use App\Http\Controllers\BookController;
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



Route::get('/books',[BookController::class, 'index']);
Route::get('/books/{id}',[BookController::class, 'show']);
Route::get('/books/create',[BookController::class, 'create']);
Route::post('/books',[BookController::class, 'store']);
Route::get('/books/{id}/edit',[BookController::class, 'edit']);
Route::put('/books/{id}',[BookController::class, 'update']);
Route::delete('/books/{id}',[BookController::class, 'destroy']);