<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'title', 'producer', 'number_of_doors'
    ];



    

    // public static function drafts()
    // {
    //     return self::where('published', 0)->get();
    // }
}