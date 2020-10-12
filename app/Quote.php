<?php

namespace App;

class Quote
{
    private static $url = "https://quote-garden.herokuapp.com/api/v2/";

    public static function getRandom($t = false)
    {
        return json_decode(file_get_contents(self::$url . 'quotes/random'));
    }
}
