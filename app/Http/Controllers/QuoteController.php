<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

class QuoteController extends Controller
{
    public function index()
    {
        $quote = Quote::getRandom();
        $quote->quote = (object) $quote->quotes[0];
        return view('quotes.home',[
            "quote" => $quote
        ]);
    }
}
