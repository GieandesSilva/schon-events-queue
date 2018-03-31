<?php

namespace App\Listeners;

use App\Events\ProductDowngrading;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockDifferenceListener
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
    public function handle(ProductDowngrading $event)
    {
        //
        $product = $event->getProduct();
        if($product->stock < $product->stock_max) {

            $difference = $product->stock_max - $product->stock;
            \Log::alert("You can still add {$difference} items before exceeding the {$product->name} product without exceeding the limit");
        }
    }
}
