<?php

namespace App\Http\Controllers\Artist;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{

    public function __construct() {
        $this->middleware('auth:artist')->except(['profile']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = auth()->user()->songs;
        return view('artist.index', compact('songs'));
    }

    

    public function opportinuite() 
    {
        return view('opp');
    }

    public function profile(Artist $artist)
    {
        dd($artist);
        return view('artist.profile', compact('artist'));
    }

}
