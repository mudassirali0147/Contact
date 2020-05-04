<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Nytrotech\Contact\Http\Controllers'], function () {
    

Route::get('contact', 'ContactController@index')->name('contact');

Route::post('/contact/store', 'ContactController@store')->name('contact.store');

});