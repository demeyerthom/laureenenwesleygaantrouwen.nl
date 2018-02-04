<?php

/** @var \Illuminate\Routing\Router $router */

use App\Entity\GiftReservation;
use App\Entity\Invitee;
use App\Mail\GiftReservedSubmitted;
use App\Mail\RsvpConfirmationSent;
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

Route::group(['prefix' => 'mailable', 'middleware' => 'admin.user'], function () {
    Route::get('gift-reserved-submitted/{id}', function ($id) {
        $reservation = GiftReservation::find($id);

        return new GiftReservedSubmitted($reservation);
    });
    Route::get('rsvp-confirmation-sent/{uid}', function ($uid) {
        $invitees = Invitee::where('group_uid', $uid)->get();

        return new RsvpConfirmationSent($invitees->all());
    });
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});