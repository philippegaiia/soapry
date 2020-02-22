<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'active' => 1,
    ];

    public function ingredientCategory()
    {
        return $this->belongsTo(IngredientCategory::class);
    }

    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

     public function activeOptions(){
        return [
            1 => 'Actif',
            0 => 'Inactif',
        ];
    }
}
