<?php

use App\Http\Controllers\ComicController;
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
    $title = 'home';
    return view('home', compact('title'));
})->name('home');

Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');

Route::get('/comics/{comic}', [ComicController::class, 'show'])->name('comic.show');

Route::get('/characters', function () {
    return view('characters', compact('title'));
})->name('characters');

Route::get('/movies', function () {
    return view('movies', compact('title'));
})->name('movies');

Route::get('/tv', function () {
    return view('tv', compact('title'));
})->name('tv');

Route::get('/games', function () {
    return view('games', compact('title'));
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles', compact('title'));
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos', compact('title'));
})->name('videos');

Route::get('/fans', function () {
    return view('fans', compact('title'));
})->name('fans');

Route::get('/news', function () {
    return view('news', compact('title'));
})->name('news');

Route::get('/shop', function () {
    return view('shop', compact('title'));
})->name('shop');
