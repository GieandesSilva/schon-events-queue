<?php

namespace App\Listeners;

use App\Events\ProductUpdating;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class CheckStockMaxListener
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
     * @param  ProductUpdating  $event
     * @return void
     */
    public function handle(ProductUpdating $event)
    {
        //
        $product = $event->getProduct();
        if($product->stock >= $product->stock_max) {

            \Log::alert("Item limit of {$product->name} product exceeded");
        }
    }
}
