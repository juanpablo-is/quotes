<?php

namespace App;

class Quote
{
    private static $url = "https://quote-garden.herokuapp.com/api/v2/";

    public static function getRandom()
    {
        // return json_decode(file_get_contents(self::$url . 'quotes/random'));
        return json_decode(file_get_contents(self::$url . 'authors/Elizabeth%20Kenny?limit=1'));
    }
}
