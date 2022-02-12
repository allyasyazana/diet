<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecordMeal extends Model
{
    public $table="recordmeals";

    protected $fillable = [
        'id', 'user_id','date','meal_breakfast','qty1','subT1','meal_lunch','qty2','subT2','meal_dinner',
        'qty3','subT3','meal_brunch','qty4','subT4','meal_tea','qty5','subT5','total',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function meal1(){
    //     return $this->belongsTo(Meal::class, 'meal_breakfast' );
    // }

    // public function meal2(){
    //     return $this->belongsTo(Meal::class, 'meal_lunch');
    // }

    // public function meal3(){
    //     return $this->belongsTo(Meal::class, 'meal_dinner');
    // }
}
