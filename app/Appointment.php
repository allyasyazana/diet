<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $table="appointments";

    protected $fillable = [
        'name','date','time','patient_id'
    ];
}

