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
});

Route::get('/characters', function () {
    $title = "Characters";
    return view('characters', compact('title'));
});
Route::get('/comics', function () {
        $title = "Comics";
    return view('comics', compact('title'));
});
Route::get('/movies', function () {
        $title = "Movies";
    return view('movies', compact('title'));
});
Route::get('/tv', function () {
        $title = "Tv";
    return view('tv', compact('title'));
});
Route::get('/games', function () {
        $title = "Games";
    return view('games', compact('title'));
});
Route::get('/collectibles', function () {
        $title = "Collectibles";
    return view('collectibles', compact('title'));
});
Route::get('/videos', function () {
        $title = "Videos";
    return view('videos', compact('title'));
});
Route::get('/fans', function () {
        $title = "Fans";
    return view('fans', compact('title'));
});
Route::get('/news', function () {
        $title = "News";
    return view('news', compact('title'));
});
Route::get('/shop', function () {
        $title = "Shop";
    return view('shop', compact('title'));
});
