<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();
        return view('welcome',compact('services'));
    }

    public function collection() 
    {
        return view('collection');
    }

    public function projet() {
        return view('projet');
    }

    public function opportinuite() {
        return view('challenge');
    }
}
