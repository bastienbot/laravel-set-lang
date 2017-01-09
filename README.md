# Laravel set Lang

# Infos
This package is only compatible with Laravel 5.1+
This package has two purposes : 
* Setting by **default** the language to the client browser language. Fallback language is english
* Providing routes and a service provider to set the user's language choice in a **cookie** and retrieve it on load

# Usage
* Go to you Laravel project folder in your favorite terminal
* Execute :  `composer require bastienbot/laravel-set-lang dev-master`
* Add the following line to the `config/app.php` : 
```
'providers' => [
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        ...
        ...
        ...
        Bastienbot\LaravelSetLang\LangServiceProvider::class,
```
* Now you just need to create the links in HTML in your view(s), the anchors being : `/lang/{lang}`. `{lang}` should be a string, ex : `en`, `fr`, etc...

