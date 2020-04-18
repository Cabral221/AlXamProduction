<?php

namespace App\Models\Artist;

use App\Artist;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = ['audio','artist_id','title','thumbnail'];

    public function artist() {
        return $this->belongsTo(Artist::class);
    }
}
