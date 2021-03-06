<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'phone', 'document', 'street', 'city', 'zip_code', 'state', 'complement' ];

    public function items()
    {
        return $this->belongsToMany('App\Models\Item')->withTimestamps();
    }
}
