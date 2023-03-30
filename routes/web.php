<?php


Route::get('/series', 'SeriesController@index')->name('list_series');
Route::get('/series/criar', 'SeriesController@create')->name('form_add_series');
Route::post('/series/criar', 'SeriesController@store')->name('add_series');
Route::delete('/series/remover/{id}', 'SeriesController@destroy')->name('remove_series');
