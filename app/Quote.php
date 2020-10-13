<?php

namespace App;

class Quote
{
    private static $url = "https://quote-garden.herokuapp.com/api/v2/";

    public static function getRandom($path, $opcion = false)
    {
        return json_decode(file_get_contents(self::$url . $path), $opcion);
    }
    
    public static function getGenres(){
        return json_decode(file_get_contents(self::$url . 'genres'), false);
    }
}
