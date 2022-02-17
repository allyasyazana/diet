<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PatientCalorie extends Model
{
    public $table="patientcalories";

    protected $fillable = [
        'user_id','month','calorie'
    ];
}
