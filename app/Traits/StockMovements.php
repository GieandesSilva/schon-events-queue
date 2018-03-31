<?php

namespace App\Traits;

use App\Models\Product;

trait StockMovements
{
    //
    public function product()
    {

        return $this->belongsTO(Product::class);
    }
}
