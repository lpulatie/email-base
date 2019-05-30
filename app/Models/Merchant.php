<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Merchant extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
