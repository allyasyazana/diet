<?php

namespace App;

use App\Day;
use App\Time;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public $table="appointments";

    protected $fillable = [
        'user_id','date','time_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function time(){
        return $this->belongsTo(Time::class);
    }
}


