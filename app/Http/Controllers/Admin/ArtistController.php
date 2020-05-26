<?php

namespace App\Http\Controllers\Admin;

use App\Artist;
use App\TypeArtist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{

    public function index()
    {
        $artists = Artist::with('typeArtist')->limit(5)->orderBy('created_at','desc')->get();
        $typeArtists = TypeArtist::all();

        return view('admin.artists.index', compact('typeArtists','artists'));
    }

    public function storeTypeArtist(Request $request)
    {
        $this->validate($request, [
            'libele' => 'required|string|max:255'
        ]);
        
        TypeArtist::create([
            'libele' => $request->libele,
        ]);
        
        return redirect()->back()->with('success',"Type d'artist : Création avec success");
    }

    public function deleteTypeArtist(Request $request, $id)
    {
        // dd($id);
        $type = TypeArtist::find($id);
        $type->delete();
        return redirect()->back()->with('success', "Type d'artiste supprimer avec succés");
    }

}