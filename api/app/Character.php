<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
        'name',
        'description',
    ];

    public function comics(){
        return $this->belongsToMany(Comic::class);
    }


}
