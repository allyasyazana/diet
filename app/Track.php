<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $table="tracks";

    protected $fillable = [
        'breakfast','lunch','dinner','calories','meal_id',
    ];
}
