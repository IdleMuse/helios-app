<?php

Auth::routes();

Route::middleware(['auth'])->group(function(){

    Route::get('/', 'SiteNavigationController@index')->name('home');

    Route::resource('users', 'UserController');
    Route::resource('characters', 'CharacterController');
    Route::resource('factions', 'FactionController');    
});
