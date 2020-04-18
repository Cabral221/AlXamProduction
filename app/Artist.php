<?php

namespace App;

use App\TypeArtist;
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
        'name', 'email', 'password', 'type_artist_id',
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

    protected static function booted() {
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

    public function songs() {
        return $this->hasMany(Song::class);
    }
}
