<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quote = Quote::getRandom();
        return view('quotes.home', [
            "quote" => $quote
        ]);
    }

    public function random()
    {
        return json_encode(Quote::getRandom());
    }
}
