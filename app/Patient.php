<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    public $table="patients";

    protected $fillable = [
        'name','email','password','address','age','gender',
    ];
}
