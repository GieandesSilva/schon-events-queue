<?php

namespace App\Listeners;

use App\Events\ProductUpdated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockMinListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductDowngrading  $event
     * @return void
     */
    public function handle(ProductUpdated $event)
    {
        //
        $product = $event->getProduct();
        if($product->stock < $product->stock_max) {

            $difference = $product->stock_max - $product->stock;
            \Log::alert("You can still add {$difference} items before exceeding the {$product->name} product without exceeding the limit");
        }
    }
}
