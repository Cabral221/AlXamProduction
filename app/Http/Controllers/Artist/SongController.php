<?php

namespace App\Http\Controllers\Artist;

use Carbon\Carbon;
use App\Models\Artist\Song;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SongController extends Controller
{
    
    public function store(Request $request) 
    {
        // Validation du Request
        $validator = Validator::make($request->all(), [
            'audioName' => ['required', 'string', 'max:255'],
            'audioFile' => ['required','mimes:mpga,wav'],
        ]);

        if ($validator->fails()) {
            dd($validator->messages());
            // Some logic for return invalid request with response
        }

        $song = $request->file('audioFile');
        $ext = $song->getClientOriginalExtension();
        $filename = Str::slug(str_replace('.'.$ext, '', $song->getClientOriginalName()));
        
        // ****Refact le nom du son
        $url = $song->storeAs(
            'songs/'. Carbon::now()->year .'/'. Carbon::now()->month,
            $filename . '-' .Carbon::now()->timestamp . '.' . $ext,
            'public'
        );

        $track = new Song([
            'audio' => $url,
            'title' => $request['audioName'],
            'thumbnail' => 'thumbnail.jpg'
        ]);
        Auth::user()->songs()->save($track);

        return redirect()->back();
        
    }
    public function delete($id)
    {
        $song = Song::find($id);

        Storage::disk('public')->delete($song->audio);
        $song->delete();
        
        return redirect()->back();
    }
}
