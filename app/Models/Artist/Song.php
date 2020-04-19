<?php

namespace App\Models\Artist;

use App\Artist;
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

    public function artist() {
        return $this->belongsTo(Artist::class);
    }
}
