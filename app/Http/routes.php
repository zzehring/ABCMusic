<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('musicians','MusicianController');
Route::resource('songs', 'SongsController');
Route::resource('homes', 'HomesController');
Route::resource('instruments', 'InstrumentsController');
Route::resource('albums', 'AlbumsController');
Route::resource('musicians.list_albums', 'MusicianController');

