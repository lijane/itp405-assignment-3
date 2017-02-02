<?php

Route:: get('/dvds/search', 'SearchController@index');
Route::get('/','SearchController@redirect');
Route::get('/dvds','SearchController@results');

// Route::get('/', function () {
//     return view('welcome');
// });