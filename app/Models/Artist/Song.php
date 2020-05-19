<?php

namespace App\Models\Artist;

use App\Artist;
use Carbon\Carbon;
use App\Models\Like;
use App\Models\Avatar;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['audio','artist_id','title','thumbnail','slug'];

    public static function booted() {
        static::creating(function ($song) {
            $song->slug = Str::slug($song->title).'-'.Carbon::now()->timestamp;
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function avatar()
    {
        return $this->morphOne(Avatar::class,'avatarable');
    }

    public function artist() 
    {
        return $this->belongsTo(Artist::class);
    }

    public function likes()
    {
        return $this->morphMany(Like::class,'likeable');
    }

    /**
     * return if user authentiicate like this songs
     * @param Artist|User $auth
     * @return boolean
     */
    public function isLikeByUserAuth($auth): bool
    {
        foreach($this->likes as $like) {
            if($like->likerable->id === $auth->id){
                return true;
            }
        }
        return false;
    }
}
