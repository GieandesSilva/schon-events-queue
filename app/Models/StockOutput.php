<?php

namespace App\Models;

use App\Events\StockOutputCreated;
use Illuminate\Database\Eloquent\Model;
use App\Traits\StockMovements;

class StockOutput extends Model
{
    //
    use StockMovements;

    protected $dispatchesEvents = [
        'created' => StockOutputCreated::class
    ];
}
