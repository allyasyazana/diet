<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public $table="meals";

    protected $fillable = [
        'name','calorie','image',
    ];
}
