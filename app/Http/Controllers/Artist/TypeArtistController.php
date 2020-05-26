<?php 

namespace App\Http\Controllers\Artist;

use App\TypeArtist;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use App\Http\Controllers\Controller;

class TypeArtistController extends Controller
{
    
    public function storeTypeArtist(Request $request)
    {
        $this->validate($request, ['genre' => 'integer|required']);
        $type = TypeArtist::find($request->genre);
        if(!$type){
            // Return redirect with alert error
            Flashy::error("Ce genre n'existe pas");
            return redirect()->back();
        }
        $artist = auth()->user();
        $artist->typeArtist()->associate($type);
        $artist->save();
        Flashy::success("Merci de completer votre profil");
        return redirect()->back();
    }
}