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
Route::get('musicians/albums_by_musician/{id}', array('as'=>'musicians.albums_by_musician', 'uses' => 'MusicianController@list_albums'));
Route::get('albums/album_date', array('as'=>'albums.album_date', 'uses' => 'AlbumsController@albumsInDate'));
Route::get('songs/songs_count', array('as'=>'songs.song_count', 'uses' => 'SongsController@songCount'));
Route::get('instruments/multiple/', array('as'=>'instruments.multiple', 'uses' => 'InstrumentsController@multipleInstrumentMusicians'));
Route::resource('musicians','MusicianController');
Route::resource('songs', 'SongsController');
Route::resource('homes', 'HomesController');
Route::resource('instruments', 'InstrumentsController');
Route::resource('albums', 'AlbumsController');
