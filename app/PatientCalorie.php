<?php

namespace App;
use App\Month;
use App\User;

use Illuminate\Database\Eloquent\Model;

class PatientCalorie extends Model
{
    public $table="patientcalories";

    protected $fillable = [
        'user_id','month_id','calorie'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function month(){
        return $this->belongsTo(Month::class);
    }
}
