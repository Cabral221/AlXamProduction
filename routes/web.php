<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/collection', 'ArtistController@collection')->name('collection');
Route::get('/projet', 'ArtistController@projet')->name('projet');
Route::get('/challenge', 'ArtistController@challenge')->name('challenge');

Route::get('/user/opp', 'ArtistController@opp')->name('user-opp');
Route::get('/artist', 'ArtistController@index')->name('artist');


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
Route::get('/home', 'HomeController@index')->name('home');
