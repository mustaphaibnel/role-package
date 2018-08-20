<?php

Route::group(['namespace' => 'MustaphaIbnel\Role\Http\Controllers'], function () {
    Route::get('roles', 'ContactController@index')->name('roles.index');
    Route::post('roles', 'ContactController@store')->name('roles.store');
});