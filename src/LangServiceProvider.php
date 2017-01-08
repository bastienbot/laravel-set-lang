<?php

namespace Bastienbot\LaravelSetLang;

use App;
use Config;
use Request;
use Cookie;
use Crypt;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Encryption\DecryptException;

class LangServiceProvider extends ServiceProvider
{

    private $request;
    private $cookie_name;

    public function __construct($app)
    {
        $this->request = new Request;
        $this->cookie_name = Config::get('app.name') . '_lang';
    }

    private function getLang()
    {
        $lang = (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) : 'en';

        return $lang;
    }

    private function setCookie()
    {
        $lang = $this->getLang();
        Cookie::queue($this->cookie_name, $lang, time() + 60 * 60 * 24 * 30 * 12);
        App::setLocale($lang);
    }

    private function getCookie()
    {
        $lang = Cookie::get($this->cookie_name);
        try {
            $lang = Crypt::decrypt($lang);
        } catch (DecryptException $e) {
            $lang = '';
        }
        if (!empty($lang)) {
            App::setLocale($lang);
        } else {
            $this->setCookie();
        }
    }

    public function boot()
    {
        $this->getCookie();
    }

    public function register()
    {
    }
}
