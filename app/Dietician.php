<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dietician extends Model
{
    public $table="dieticians";

    protected $fillable = [
        'name','email','password','address','age','gender',
    ];
}
