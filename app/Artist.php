<?php

namespace App;

use App\TypeArtist;
use App\Models\Avatar;
use App\Models\Follower;
use App\Models\Artist\Song;
use Illuminate\Support\Str;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Artist extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type_artist_id','provider','provider_id','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function booted() 
    {
        static::creating( function($artist) {
            $artist->slug = Str::slug($artist->name);
        });
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function typeArtist() {
        return $this->belongsTo(TypeArtist::class);
    }

    public function avatar()
    {
        return $this->morphOne(Avatar::class,'avatarable');
    }

    public function songs()
    {
        return $this->hasMany(Song::class);
    }
    
    public function follow()
    {
        return $this->morphMany(Follower::class,'followable');
    }

    public function followers()
    {
        return $this->hasMany(Follower::class);
    }

    public function isFollowBy($user)
    {
        // dd($auth);
        foreach($this->followers as $follower) {
            if($follower->followable == $user){
                return true;
            }
        }
        return false;
    }
}
