<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $table="appointments";

    protected $fillable = [
        'patient_name','date','time','user_id'
    ];
}

