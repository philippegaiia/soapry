<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $guarded = [];

    protected $attributes =[
        'status' => 0,
        'produced' => 0,
    ];

    protected $casts = [
        'production_date' => 'date:D d M',
        'ready_date' => 'date:D d M',
    ];

    public function followups(){
        return $this->hasMany(Followup::class);

    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getStatusAttribute($attribute)
    {
        return $this->statusOptions()[$attribute];
    }

    public function getProducedAttribute($attribute){
        return $this->producedOptions()[$attribute];
    }

    // public function scopeOui($query)
    // {
    //     return $query->where('produced', 1);
    // }

    // public function scopeNon($query)
    // {
    //     return $query->where('produced', 0);
    // }

    public function scopePlanned($query)
    {
        return $query->where('status', 0);
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 1);
    }

    public function statusOptions(){
        return [
            0 => 'Planifié',
            1 => 'Confirmé',
            2 => 'En cours',
            3 => 'Cure',
            4 => 'Livré',
        ];
    }

    public function producedOptions(){
        return [
            0 => 'Non',
            1 => 'Oui',
        ];
    }
}
