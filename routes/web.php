<?php

/** @var \Illuminate\Routing\Router $router */

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

Route::get('/', 'HomeController@get')->name('home');

Route::group(['prefix' => 'rsvp'], function () {
    Route::get('/formulier', 'RsvpController@form')->name('rsvp-form');
    Route::post('/formulier', 'RsvpController@saveForm');
    Route::get('/bedankt/{id}', 'RsvpController@thanks')->name('rsvp-thanks');
});

Route::get('/photobook', 'PhotobookController@get')->name('photobook');

Route::group(['prefix' => 'gifts'], function () {
    Route::get('/', 'GiftController@list')->name('gift-list');
    Route::post('/', 'GiftController@post');
    Route::get('/bedankt/{id}', 'GiftController@thanks')->name('gift-thanks');
});

Route::get('/pages/{slug}', 'PageController@get');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});