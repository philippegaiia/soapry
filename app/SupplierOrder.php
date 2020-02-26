<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SupplierOrder extends Model
{
    //
    protected $guarded = [];

    //  protected $casts = [
    //     'order_date' => 'date:ymd-s',
    //     'delivery_date' => 'date:ymd-s',
    // ];

    protected $attributes =[
        'status' => 0,
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function supplies()
    {
        return $this->hasMany(Supply::class);
    }

     public function statusOptions(){
        return [
            0 => 'Passée',
            1 => 'Confirmée',
            2 => 'Livrée',
        ];
    }
}
