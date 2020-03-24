<?php

namespace App;

use App\Formula;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'active' => 1,
    ];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function formulas()
    {
        return $this->hasMany(Formula::class)->withTimestamps();
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
