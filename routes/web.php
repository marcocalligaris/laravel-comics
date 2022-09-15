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
// Home page
Route::get('/', function () {
    $title = "Home";
    return view('home', compact('title'));
})->name('home');

Route::get('/characters', function () {
    $title = "Characters";
    return view('characters', compact('title'));
})->name('characters');

Route::get('/comics', function () {
        $title = "Comics";
    return view('comics', compact('title'));
})->name('comics');

Route::get('/movies', function () {
        $title = "Movies";
    return view('movies', compact('title'));
})->name('movies');

Route::get('/tv', function () {
        $title = "Tv";
    return view('tv', compact('title'));
})->name('tv');

Route::get('/games', function () {
        $title = "Games";
    return view('games', compact('title'));
})->name('games');

Route::get('/collectibles', function () {
        $title = "Collectibles";
    return view('collectibles', compact('title'));
})->name('collectibles');

Route::get('/videos', function () {
        $title = "Videos";
    return view('videos', compact('title'));
})->name('videos');

Route::get('/fans', function () {
        $title = "Fans";
    return view('fans', compact('title'));
})->name('fans');

Route::get('/news', function () {
        $title = "News";
    return view('news', compact('title'));
})->name('news');

Route::get('/shop', function () {
        $title = "Shop";
    return view('shop', compact('title'));
})->name('shop');
