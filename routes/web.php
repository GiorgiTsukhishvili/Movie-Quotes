<?php

use App\Http\Controllers\AdminController;
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

Route::get('/admin/login', [AdminController::class, 'index'])->name('admin.login');

Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login');

Route::get('/movie/{id}', [MovieController::class, 'index'])->name('movie');

Route::middleware(['auth'])->group(function () {
	Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

	Route::get('/admin/movies', [AdminMovieController::class, 'index'])->name('admin.movies');

	Route::get('/admin/movie/{id}/quotes', [AdminQuotesController::class, 'index'])->name('admin.quotes');

	Route::get('/admin/movie-create', [AdminMovieController::class, 'create'])->name('admin.movie-create');

	Route::get('/admin/movie-update/{id}', [AdminMovieController::class, 'update'])->name('admin.movie-update');

	Route::get('/admin/quote-create/{id}', [AdminQuotesController::class, 'create'])->name('admin.quote-create');

	Route::get('/admin/quote-update/{id}', [AdminQuotesController::class, 'update'])->name('admin.quote-update');

	Route::post('/admin/quote-create/{id}', [AdminQuotesController::class, 'store'])->name('admin.quote-create');

	Route::put('/admin/quote-update/{id}', [AdminQuotesController::class, 'put'])->name('admin.quote-update');

	Route::put('/admin/movie-update/{id}', [AdminMovieController::class, 'put'])->name('admin.movie-put');

	Route::post('/admin/movie-create', [AdminMovieController::class, 'store'])->name('admin.movie-store');

	Route::delete('/adming/movie/{id}/delete', [AdminMovieController::class, 'destroy'])->name('movie.delete');

	Route::delete('/adming/quote/{id}/delete', [AdminQuotesController::class, 'destroy'])->name('quote.delete');
});
