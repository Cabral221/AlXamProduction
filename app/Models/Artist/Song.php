<?php

namespace App\Models\Artist;

use App\Artist;
use App\Models\Like;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['audio','artist_id','title','thumbnail'];

    public static function booted() {
        static::creating(function ($song) {
            $song->slug = Str::slug($song->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function artist() {
        return $this->belongsTo(Artist::class);
    }

    public function likes(){
        return $this->morphMany(Like::class,'likeable');
    }

    /**
     * return if user authentiicate like this songs
     *
     * @return boolean
     */
    public function isLikeByUserAuth($auth): bool
    {
        // dd($auth);
        foreach($this->likes as $like) {
            if($like->likerable == $auth){
                return true;
            }
        }
        return false;
    }
}
