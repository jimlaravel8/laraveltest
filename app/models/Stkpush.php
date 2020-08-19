<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Stkpush extends Model
{
    public function getDataAttribute($value)
    {
        return unserialize($value);
    }
}
