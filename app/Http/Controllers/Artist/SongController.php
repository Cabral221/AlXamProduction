<?php

namespace App\Http\Controllers\Artist;

use Carbon\Carbon;
use App\Models\Like;
use App\Models\Artist\Song;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
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
            'thumbnail' => ['mimes:jpg,png,jpeg'],
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

        // Avatar Du Song
        // $user = Auth::guard('artist')->user();
        $thumbnail = $request->file('thumbnail');
        $urlThumb = null;
        // return dd($thumbnail);
        if($thumbnail !== null){
            // Get extension file and file name
            $ext = $thumbnail->getClientOriginalExtension();
            $filename = Str::slug(str_replace('.'.$ext, '', $thumbnail->getClientOriginalName())). '-' .Carbon::now()->timestamp ;
            $urlThumb = 'songs/thumbnails/'. Carbon::now()->year .'/'. Carbon::now()->month.'/'. $filename . '.' . $ext;
            
            // Resize avatar with image intervention
            $newThumbnail = Image::make($thumbnail->getRealPath())->fit(200, 200)->encode('jpg',80);
            Storage::disk('public')->put($urlThumb,$newThumbnail);
            // 
            // dd($thumbnail);
        }
        

        $track = new Song([
            'audio' => $url,
            'title' => $request['audioName'],
            'thumbnail' => $urlThumb ? $urlThumb : 'images/thumbnail.jpg'
        ]);
        Auth::guard('artist')->user()->songs()->save($track);

        return redirect()->back();
        
    }

    public function delete(Song $song)
    {
        Storage::disk('public')->delete($song->audio);
        $song->delete();
        
        return redirect()->back();
    }

    /**
     * Permet de liker ou unliker un son
     *
     * @param Song $song
     * @return void
     */
    public function like(Song $song)
    {
        if(Auth::user() == null && Auth::guard('artist')->user() == null){
            return response()->json(['code'=>403,'message'=>'Unauthorized'],403);
        }
        if(Auth::user() == null){
            $auth = Auth::guard('artist')->user();
        }else{
            $auth = Auth::user();
        }
        $className = get_class($song);
        // dd($auth);
        if($song->isLikeByUserAuth($auth))
        {
            $like = Like::where([
                'likerable_type' => get_class($auth),
                'likerable_id' => $auth->id,
                'likeable_type' => get_class($song),
                'likeable_id' => $song->id,
            ]);
            $like->delete();
            return response()->json([
                'code' => 200,
                'message'=>'Like Bien Supprimer',
                'likes' => $className::find($song->id)->likes->count(),
            ],200);
        }

        Like::create([
            'likerable_type' => get_class($auth),
            'likerable_id' => $auth->id,
            'likeable_type' => get_class($song),
            'likeable_id' => $song->id,
        ]);
        return response()->json([
            'code'=>200,
            'message'=>'Like Bien ajouter',
            'likes' => $className::find($song->id)->likes->count(),
        ], 200);
    
    }
}
