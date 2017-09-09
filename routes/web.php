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

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/cadeau', function () {
    return view('cadeau');
})->name('cadeau');
Route::get('/rsvp', function () {
    return view('rsvp');
})->name('rsvp');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
