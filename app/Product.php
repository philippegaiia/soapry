<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function batches()
    {
        return $this->hasMany(Batch::class);
    }
}
