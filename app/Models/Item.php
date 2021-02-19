<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'price', 'code'];

    public function customer()
    {
        return $this->belongsToMany('App\Models\Customer')->withTimestamps();
    }
}
