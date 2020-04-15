<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('artist');
    }

    public function collection() 
    {
        return view('collection');
    }

    public function projet() {
        return view('projet');
    }

    public function challenge() {
        return view('challenge');
    }

    public function opp() 
    {
        return view('opp');
    }

}
