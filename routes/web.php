<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminQuotesController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
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

Route::get('/', [QuoteController::class, 'index'])->name('quote');

Route::get('/movie/{id}', [MovieController::class, 'index'])->name('movie');

Route::get('/admin/movies', [AdminMovieController::class, 'index'])->name('admin.movies');

Route::get('/admin/movie/{id}/quotes', [AdminQuotesController::class, 'index'])->name('admin.quotes');

Route::delete('/adming/movie/{id}/delete', [AdminMovieController::class, 'destroy'])->name('movie.delete');

Route::delete('/adming/quote/{id}/delete', [AdminQuotesController::class, 'destroy'])->name('quote.delete');
