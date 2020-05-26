<?php

namespace App;

use App\Artist;
use Illuminate\Database\Eloquent\Model;

class TypeArtist extends Model
{
    
    public $fillable = ['libele'];

    public function artists() 
    {
        return $this->hasMany(Artist::class);
    }
}
