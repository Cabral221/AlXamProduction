<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Artist\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    
     /**
     * Permet de liker ou unliker un son
     *
     */
    public function SongLike(Song $song)
    {
        if(Auth::user() == null && Auth::guard('artist')->user() == null){
            return response()->json(['code'=>403,'message'=>'Unauthorized'],403);
        }

        if(Auth::user() == null){
            $auth = Auth::guard('artist')->user();
        }else{
            $auth = Auth::user();
        }

        $classNameMedia = get_class($song);
        $subLike = [
            'likerable_type' => get_class($auth),
            'likerable_id' => $auth->id,
            'likeable_type' =>  $classNameMedia,
            'likeable_id' => $song->id,
        ];
        //d($auth);
        if($song->isLikeByUserAuth($auth))
        {
            // Delete Like
            $like = Like::where($subLike);
            $like->delete();
            $nblikes = $classNameMedia::find($song->id)->likes->count();
            return $this->jsonPrepare(200,'Like Bien Supprimer',$nblikes);
            // return response()->json([
            //     'code' => 200,
            //     'message'=>'Like Bien Supprimer',
            //     'likes' => $classNameMedia::find($song->id)->likes->count(),
            // ],200);
        }

        // Add Like
        // return response()->json(['likeable_id'=>$subLike['likeable_id']],200);
        Like::create($subLike);
        $nblikes = $classNameMedia::find($song->id)->likes->count();
        return $this->jsonPrepare(200,'Like Bien ajouter',$nblikes);
        // return response()->json([
        //     'code'=>200,
        //     'message'=>'Like Bien ajouter',
        //     'likes' => $classNameMedia::find($song->id)->likes->count(),
        // ], 200);
    
    }

    public function jsonPrepare(Int $code, String $message,Int $likes) {
        return response()->json([
            'code' => $code,
                'message' => $message,
                'likes' => $likes,
        ],$code);
    }
}
