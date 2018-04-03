<?php

namespace App\Listeners;

use App\Events\StockOutputCreated;
use App\Traits\DecrementStocks;

class DecrementStockFromOutputListener
{
    use DecrementStocks;
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
     * @param  StockOutputCreated  $event
     * @return void
     */
    public function handle(StockOutputCreated $event)
    {
        //
        $output = $event->getOutput();
        $product = $output->product;
        $this->decrement($product, $output->quantity);

        \Log::notice("A new {$product->name} product output was added");
        \Log::info("{$product->name} product stock has decreased by: {$output->quantity} items");
    }
}
