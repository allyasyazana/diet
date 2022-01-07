<?php

namespace App;
use App\Meal;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    public $table="tracks";

    protected $fillable = [
        'user_id','meal_id','meal_id2','meal_id3','total',
    ];

    public function meal(){
        return $this->belongsTo(Meal::class, 'meal_id' );
    }

    public function meal2(){
        return $this->belongsTo(Meal::class, 'meal_id2');
    }

    public function meal3(){
        return $this->belongsTo(Meal::class, 'meal_id3');
    }
}
