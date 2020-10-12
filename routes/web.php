<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'QuoteController@index')->name('quote.index');
Route::get('/random', 'QuoteController@random')->name('quote.random');
Route::get('/author/{author}', 'QuoteController@author')->name('quote.author');
Route::get('/genre/{genre}', 'QuoteController@genre')->name('quote.genre');