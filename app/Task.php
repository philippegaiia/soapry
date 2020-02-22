<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'active' => 1,
    ];

    public function followups(){
        return $this->hasMany(Followup::class);
    }

     public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

    public function activeOptions(){
        return [
            1 => 'Active',
            0 => 'Inactive',
        ];
    }
}
