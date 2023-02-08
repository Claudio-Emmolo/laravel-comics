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
    $comicList = config('comics');
    //dd($comicList);
    return view('home', ['comicList' => $comicList]);
})->name('homepage');

Route::get('/single', function () {
    $comicList = config('comics');
    //dd($comicList);
    return view('single', ['comicList' => $comicList]);
})->name('single');
