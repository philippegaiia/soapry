<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'status' => 0,
        'dip' => 1,
    ];

    public function products()
    {
        return $this->belongsTo(Product::class);
    }

    public function formulaItems()
    {
        return $this->hasMany(FormulaItem::class);
    }

    public function getStatusAttribute($attribute){
        return $this->statusOptions()[$attribute];
    }

    public function getDipAttribute($attribute){
        return $this->dipOptions()[$attribute];
    }

    public function statusOptions(){
        return [
            1 => 'Active',
            0 => 'Inactive',
        ];
    }

    public function dipOptions(){
        return [
            1 => 'oui',
            0 => 'non',
        ];
    }
}
