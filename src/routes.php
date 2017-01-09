<?php
Route::group(['namespace' => 'Bastienbot\LaravelSetLang'], function () {
  Route::get('lang/{lang}', 'UserLangController@setLang');
});
