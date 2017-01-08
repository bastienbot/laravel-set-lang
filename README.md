# laravel-set-lang

nfos
This package is only compatible with Laravel 5.1+
This package has two purposes : 
* setting by **default** the language to the client browser language
* providing routes and a service provider to set the user's language choice in a **cookie** and retrieve it on load

# Installation
1. Go to you Laravel project folder
2. Copy in your favorite terminal :  `composer require bastienbot/laravel-set-lang dev-master`
3. add the following line to the `config/app.php` : 
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

4. Now you just need to create the links into your view based on the following format : `/lang/{lang}` 

