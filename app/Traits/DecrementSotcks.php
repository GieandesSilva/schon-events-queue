<?php
/**
 * Created by PhpStorm.
 * User: silva
 * Date: 02/04/18
 * Time: 21:24
 */

namespace App\Traits;

use App\Models\Product;

trait DecrementStocks
{

    public function decrement(Product $product, $quantity)
    {
        $product->stock = $product->stock - $quantity;
        $product->save();
    }
}