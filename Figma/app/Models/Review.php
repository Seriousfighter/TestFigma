<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable =[
        'name',
        'points',
        'description',
    ];

    public function getNameAttribute($value){
        return ucfirst($value);
    }
    public function getDescriptionAttribute($value){
        return ucfirst($value);
    }
}

