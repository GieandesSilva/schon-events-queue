<?php

namespace App\Models;

use App\Events\StockEntryCreated;
use Illuminate\Database\Eloquent\Model;
use App\Traits\StockMovements;

class StockEntry extends Model
{
    //
    use StockMovements;

    protected $dispatchesEvents = [
        'created' => StockEntryCreated::class
    ];
}
