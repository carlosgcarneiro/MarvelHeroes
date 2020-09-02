<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function comics(){
        return $this->hasMany(Serie::class);
    }

    public function story(){
        return $this->belongsToOne(Story::class);
    }
}
