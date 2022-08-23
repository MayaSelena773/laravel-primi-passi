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

Route::get('/home', function () {

    $data = [
        'title' => 'L`Albero della vita',
        'director' => 'Darren Aronofsky',
        'year' => '2006',
        'genre' => 'Fantastico, Drammatico, Sentimentale',
        'actors' => ['Hugh Jackman', 'Rachel Weisz', 'Ellen Burstyn'],

    ];

    return view('home', $data);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('about');
})->name('about');
