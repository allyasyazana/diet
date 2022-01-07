<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $table="tracks";

    protected $fillable = [
        'user_id','meal_id','meal_id2','meal_id3','total',
    ];
}
