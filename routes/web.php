<?php

/** @var \Illuminate\Routing\Router $router */

$router->get('/', 'HomeController@get')->name('home');

$router->group(['namespace' => 'RSVP', 'prefix' => 'rsvp'], function () {
    $this->get('/formulier', 'FormController@get')->name('rsvp-form');
    $this->post('/formulier', 'FormController@post');
    $this->get('/bedankt', 'ThanksController@get')->name('rsvp-thanks');
});
$router->get('/photobook', 'PhotobookController@get')->name('photobook');

$router->group(['namespace' => 'Guestbook', 'prefix' => 'guestbook'], function () {
    $this->get('/', 'GuestbookController@get')->name('guestbook');
});

$router->group(['prefix' => 'admin'], function () {
    Voyager::routes();
});