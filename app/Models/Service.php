<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $fillable = ['icon','title','describe','price','slug'];

    public static function booted() {
        static::saving(function ($service) {
            $service->slug = Str::slug($service->title);
        });
    }

}
