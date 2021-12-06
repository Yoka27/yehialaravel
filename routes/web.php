<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


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

Route::get('/books', [BookController::class, "books"])->name('books');
Route::get('/books/list', [BookController::class, "booksList"])->name('books.list');
Route::get('/books/add', [BookController::class, "booksAdd"])->name('books.add');
Route::post('/books/save', [BookController::class, "booksStore"])->name('books.store');
Route::get('/books/{id}', [BookController::class, "booksId"])->name('books.book');
Route::delete('/books/{id}/delete', [BookController::class, "booksDestroy"])->name('books.delete');
Route::get('/books/{id}/edit', [BookController::class, "booksEdit"])->name('books.edit');
Route::put('/books/{id}/update', [BookController::class, "booksUpdate"])->name('books.update');

