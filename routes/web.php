<?php

/** @var \Illuminate\Routing\Router $router */

$router->get('/', 'HomeController@get')->name('home');

$router->group(['prefix' => 'rsvp'], function () {
    $this->get('/formulier', 'RsvpController@form')->name('rsvp-form');
    $this->post('/formulier', 'RsvpController@saveForm');
    $this->get('/bedankt', 'RsvpController@thanks')->name('rsvp-thanks');
});
$router->get('/photobook', 'PhotobookController@get')->name('photobook');

$router->group(['namespace' => 'Guestbook', 'prefix' => 'guestbook'], function () {
    $this->get('/', 'GuestbookController@get')->name('guestbook');
});

$router->group(['prefix' => 'admin'], function () {
    Voyager::routes();
});