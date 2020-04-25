<?php

namespace App\Models;

use App\Artist;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    
    protected $fillable = ['followable_type','followable_id','artist_id'];

    public function followable()
    {
        return $this->morphTo();
    }

    public function artist()
    {
        return $this->belongTo(Artist::class);
    }
}
