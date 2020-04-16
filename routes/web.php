<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;






Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/collection', 'HomeController@collection')->name('collection');
Route::get('/projets', 'HomeController@projet')->name('projet');
Route::get('/opportinuites', 'HomeController@opportinuite')->name('opportinuite');


Route::name('artist.')->group(function () {
    Route::get('/artist', 'Artist\ArtistController@index')->name('index');
    Route::get('/artist/opportinuites', 'Artist\ArtistController@opportinuites')->name('opportinuite');
});

Route::name('user')->group(function () {
});

Route::name('admin')->group(function () {
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



Auth::routes();
