<?php

namespace App\Models;

use App\Events\ProductUpdated;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $dispatchesEvents = [
        'updated' => ProductUpdated::class
    ];
}
