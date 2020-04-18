<?php

namespace App\Http\Controllers\Artist;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{

    public function __construct() {
        $this->middleware('auth:artist');
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

}
