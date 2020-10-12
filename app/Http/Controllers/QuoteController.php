<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quote = Quote::getRandom('quotes/random');
        return view('quotes.home', [
            "quote" => $quote->quote
        ]);
    }

    public function random()
    {
        return json_encode(Quote::getRandom('quotes/random'));
    }

    public function author($author)
    {
        $url = 'authors/' . str_replace(' ', '%20', $author) . (request('page') ? '?page=' . request('page') : '');
        return view('quotes.find', [
            "type" => $author,
            "quotes" => Quote::getRandom($url)->quotes
        ]);
    }

    public function genre($genre)
    {
        $url = 'genres/' . str_replace(' ', '%20', $genre) . (request('page') ? '?page=' . request('page') : '');
        return view('quotes.find', [
            "type" => $genre,
            "quotes" => Quote::getRandom($url)->quotes
        ]);
    }
}
