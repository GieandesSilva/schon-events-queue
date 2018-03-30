<?php

namespace App;

trait StockMovements
{
    //
    public function product()
    {

        return $this->belongsTO(Product::class);
    }
}
