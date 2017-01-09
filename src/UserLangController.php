<?php

namespace Bastienbot\LaravelSetLang;

use App;
use Cookie;
use Crypt;
use Config;
use App\Http\Controllers\Controller;

class UserLangController extends Controller
{

    public function setLang($lang)
    {
        // Cookie::queue(Config::get('app.name') . '_lang' , $lang, time() + 60 * 60 * 24 * 30 * 12);
        // dump(Config::get('app.name'));
        // dump($lang);
        return redirect()
        ->back()
        ->cookie(Config::get('app.name') . '_lang' ,
            Crypt::encrypt($lang),
            time() + 60 * 60 * 24 * 30 * 12);
    }

}
