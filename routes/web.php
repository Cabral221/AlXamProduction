<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;






Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/collection', 'HomeController@collection')->name('collection');
Route::get('/projets', 'HomeController@projet')->name('projet');
Route::get('/opportinuites', 'HomeController@opportinuite')->name('opportinuite');


Route::name('artist.')->group(function () {
    // Autrhentification des utilisteurs
    Route::post('/login/artist', 'Artist\Auth\ArtistLoginController@login')->name('login');
    Route::post('/register/artist', 'Artist\Auth\ArtistRegisterController@register')->name('register');
    
    Route::middleware('auth:artist')->group(function() {
        Route::get('/artist/home', 'Artist\ArtistController@index')->name('index');
        Route::get('/artist/opportinuites', 'Artist\ArtistController@opportinuites')->name('opportinuite');
    });
});

Route::name('user.')->group(function () {
    // Autrhentification des utilisteurs
    Auth::routes();

});

Route::name('admin')->group(function () {
    // Autrhentification des Admins

});

Route::get('/sons', function () {
    $sons = ['Music' => 'http://localhost:8000/user/sons/music.mp3'];
    $fileContents = Storage::disk('public')->get('sons/music.mp3');
    // dd($fileContents);
    $response = Response::make($fileContents, 200);
    $response->header('Content-Type', "audio/mpeg");
    
    return $response;
    // return response()->json($sons);
});



