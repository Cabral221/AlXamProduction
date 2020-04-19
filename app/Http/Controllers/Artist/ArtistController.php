<?php

namespace App\Http\Controllers\Artist;

use App\Artist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Fomvasss\Youtube\Facades\Youtube;

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
        // dd($artist->songs);
        $videos = [
            Youtube::iFrame('https://www.youtube.com/watch?v=tEnCoocmPQM', [
                'rel'=> 0, 'controls'=>1, 'showinfo'=>1, 'frameborder'=>0
            ]),
            Youtube::iFrame('https://www.youtube.com/watch?v=tEnCoocmPQM', [
                'rel'=> 0, 'controls'=>1, 'showinfo'=>1, 'frameborder'=>0
            ]),
        ];
        // dd($video);
        $songs = $artist->songs()->paginate(5);
        return view('artist.profile', compact('artist','songs','videos'));
    }

}
