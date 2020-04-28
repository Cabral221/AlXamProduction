<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    public $fillable = ['avatar','avatarable_id','avatarable_type'];

    public function avatarable()
    {
        return $this->morphTo();
    }
}
