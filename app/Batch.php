<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'status' => 0
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getStatusAttribute($attribute)
    {
        return $this->statusOptions()[$attribute];
    }

    // public function scopePlanned($query)
    // {
    //     return $query->where('status', 0);
    // }

    // public function scopeConfirmed($query)
    // {
    //     return $query->where('status', 1);
    // }

    public function statusOptions(){
        return [
            0 => 'Planned',
            1 => 'Confirmed',
            2 => 'In Process',
            3 => 'Cure',
            4 => 'Stock',
            5 => 'Delivered'
        ];
    }
}
