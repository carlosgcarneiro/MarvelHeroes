<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'description',
        'edition',
        'year',
    ];

    public function events(){
        return $this->belongsToMany(Event::class);
    }

    public function serie(){
        return $this->belongsTo(Serie::class);
    }
}
