<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public $table="records";

    protected $fillable = [
        'user_id','date','meal1','qty1','subT1','meal2','qty2','subT2','meal3','qty3','subT3','total',
    ];

    // public function meal(){
    //     return $this->belongsTo(Meal::class, 'meal1' );
    // }

    // public function meal2(){
    //     return $this->belongsTo(Meal::class, 'meal2');
    // }

    // public function meal3(){
    //     return $this->belongsTo(Meal::class, 'meal3');
    // }
}
