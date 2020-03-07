<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    protected $guarded =[];

    protected $attributes =[
        'status' => 0,
    ];

     protected $casts = [
        'expiry_date' => 'date:Y-m-d',
    ];

    public function supplierOrder()
    {
        return $this->belongsTo(SupplierOrder::class);
    }

    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

     public function getStatusAttribute($attribute)
    {
        return $this->statusOptions()[$attribute];
    }

     public function statusOptions(){
        return [
            0 => 'En Attente',
            1 => 'En Stock',
            2 => 'Epuisé'
        ];
    }
}
