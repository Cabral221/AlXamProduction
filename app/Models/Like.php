<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public $fillable = ['likerable_type','likerable_id','likeable_type','likeable_id'];
    
    public function likeable() {
        return $this->morphTo();
    }

    public function likerable() {
        return $this->morphTo();
    }
}
