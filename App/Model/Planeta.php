<?php namespace App\Model;

use App\Lib\Service;
use App\Lib\Config;

class Planeta
{
    public static function all()
    {
        return  Service::find('GET',Config::get('URL_REQUEST').'planets');
    }

    public static function findByid(int $id)
    {
        return  Service::find('GET',Config::get('URL_REQUEST').'planets/'.$id);
    }
}