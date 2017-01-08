<?php

namespace App\Http\Controllers;

use App;
use Cookie;
use Config;
use App\Http\Controllers\Controller;

class UserConfigController extends Controller
{

    public function setLang($lang)
    {
        Cookie::queue(Config::get('app.name') . '_lang' , $lang, time() + 60 * 60 * 24 * 30 * 12);
        return redirect()->back();
    }

}

