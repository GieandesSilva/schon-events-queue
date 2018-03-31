<?php

namespace App\Models;

use App\Events\ProductDowngrading;
use App\Events\ProductUpdating;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $dispatchesEvents = [
        'updating' => ProductUpdating::class,
        'updated' => ProductDowngrading::class
    ];
}
