<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'QuoteController@index')->name('quote.index');
