<?php
    Route::group(['namespace' => 'infoamin\contactform\Http\Controllers', 'middleware' => ['web']], function(){
        Route::get('contact', 'ContactFormsController@index');
        Route::post('contact', 'ContactFormsController@sendMail')->name('contact');
    });