<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'active' => 1,
        'bio' => 1,
    ];

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

     public function getBioAttribute($attribute){
        return $this->bioOptions()[$attribute];
    }

    public function activeOptions(){
        return [
            1 => 'Actif',
            0 => 'Inactif',
        ];
    }

     public function bioOptions(){
        return [
            1 => 'Biologique',
            0 => 'Conventionnel',
        ];
    }
}
