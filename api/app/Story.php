<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title',
        'description',
    ];

    public function series(){
        return $this->hasMany(Serie::class);
    }
}
