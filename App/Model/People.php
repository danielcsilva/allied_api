<?php namespace App\Model;

use App\Lib\Service;
use App\Lib\Config;

class People
{

    public static function all()
    {
        return  Service::find('GET',Config::get('URL_REQUEST').'people');
    }

    public static function findByName(string $name)
    {
        return  Service::find('GET',Config::get('URL_REQUEST').'people?search='.$name);
    }
}