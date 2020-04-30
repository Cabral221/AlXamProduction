<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;






Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/collection', 'HomeController@collection')->name('collection');
Route::get('/projets', 'HomeController@projet')->name('projet');
Route::get('/opportinuites', 'HomeController@opportinuite')->name('opportinuite');
// Liker un song
Route::get('/songs/{song:slug}/like', 'LikeController@songLike')->name('likeSong');
// Uploads d'avatars des profil d'utilisateurs
Route::post('/avatar', 'AvatarController@uploadAvatar')->name('avatar');

Route::name('artist.')->group(function () {
    // Autrhentification des artists
    Route::post('/login/artist', 'Artist\Auth\ArtistLoginController@login')->name('login');
    Route::post('/register/artist', 'Artist\Auth\ArtistRegisterController@register')->name('register');
    Route::post('artist/logout', 'Artist\Auth\ArtistLoginController@logout')->name('logout');
    // Authentication artist on facebook
    Route::get('artist/login/{provider}', 'Artist\Auth\ArtistLoginController@redirectToProvider')->name('loginFacebook');
    Route::get('artist/login/{provider}/callback', 'Artist\Auth\ArtistLoginController@handleProviderCallback');

    // Vue du profile de l'artiste
    Route::get('/artists/{artist:slug}', 'Artist\ArtistController@profile')->name('profile');
    // Vue d'un son de l'artiste
    Route::get('/artists/{artist:slug}/{song:slug}', 'Artist\ArtistController@oneSong')->name('song');

    // Follower un artist
    Route::post('/artist/{artist:slug}/follow', 'Artist\ArtistController@follow')->name('follow');
    
    Route::middleware('auth:artist')->prefix('/artist')->group(function() {
        // Artist Dashboard
        Route::get('/home', 'Artist\ArtistController@index')->name('index');
        Route::get('/opportinuites', 'Artist\ArtistController@opportinuites')->name('opportinuite');

        // Ajout de son
        Route::post('/song/add', 'Artist\SongController@store')->name('addSong');
        Route::delete('/song/delete/{song}', 'Artist\SongController@delete')->name('deleteSong');
       
    });
});

Route::name('user.')->group(function () {
    // Autrhentification des utilisteurs
    Auth::routes();

    Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('loginFacebook');
    Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

});

Route::name('admin.')->prefix('/admin')->group(function () {
    // Autrhentification des Admins
    Route::get('/login', 'Admin\Auth\AdminLoginController@showLoginForm')->name('login');
    Route::post('/login', 'Admin\Auth\AdminLoginController@login')->name('login');
    Route::post('/logout', 'Admin\Auth\AdminLoginController@logout')->name('logout');


    Route::middleware('auth:admin')->group(function() {
        Route::get('/', 'Admin\AdminController@index')->name('index');
        // Routes for sevices CRUD
        Route::get('/services', 'Admin\ServicesController@index')->name('services');
        Route::post('/services/store', 'Admin\ServicesController@store')->name('services.store');
    });
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



