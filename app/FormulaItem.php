<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormulaItem extends Model
{
    protected $guarded = [];

    public function formula()
    {
        return $this->belongsTo(Formula::class);
    }

}
