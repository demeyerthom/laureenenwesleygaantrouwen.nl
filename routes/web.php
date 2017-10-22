<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@get')->name('home');
Route::prefix('rsvp')->group(function () {
    Route::get('/formulier/{type?}', 'RSVP\FormController@get')->name('rsvp-form');
    Route::post('/formulier', 'RSVP\FormController@post');
    Route::get('/bedankt', 'RSVP\ThanksController@get')->name('rsvp-thanks');
});
Route::get('/photobook', 'PhotobookController@get')->name('photobook');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});