<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Followup extends Model
{
    protected $guarded = [];

     protected $attributes =[
        'done' => 0,
    ];

    public function batch(){
        return $this->belongsTo(Batch::class);
    }

    public function task(){
        return $this->belongsTo(Task::class);
    }

     public function getDoneAttribute($attribute){
        return $this->doneOptions()[$attribute];
    }


    public function doneOptions(){
        return [
            0 => 'Non',
            1 => 'Oui',
        ];
    }
}



