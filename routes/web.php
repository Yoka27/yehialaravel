<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;


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
Route::resource('courses',CourseController::class);

Route::get('/books', [BookController::class, "books"])->name('books');
Route::get('/books/list', [BookController::class, "booksList"])->name('books.list');
Route::get('/books/add', [BookController::class, "booksAdd"])->name('books.add');
Route::post('/books/save', [BookController::class, "booksStore"])->name('books.store');
Route::get('/books/{id}', [BookController::class, "booksId"])->name('books.book');
Route::delete('/books/{id}/delete', [BookController::class, "booksDestroy"])->name('books.delete');
Route::get('/books/{id}/edit', [BookController::class, "booksEdit"])->name('books.edit');
Route::put('/books/{id}/update', [BookController::class, "booksUpdate"])->name('books.update');


//courses routes
//Route::get('/courses', [CourseController::class, "index"])->name('courses.index');
//Route::get('/courses/create', [CourseController::class, "create"])->name('courses.create');
//Route::get('/courses/{course}', [CourseController::class, "show"])->name('courses.show');
//Route::get('/courses/{course}/edit', [CourseController::class, "edit"])->name('courses.edit');
//Route::put('/courses/{course}', [CourseController::class, "update"])->name('courses.update');
//Route::post('/courses', [CourseController::class, "store"])->name('courses.store');
//Route::delete('/courses/{course}', [CourseController::class, "destroy"])->name('courses.destroy');
///
