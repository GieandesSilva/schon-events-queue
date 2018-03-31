<?php

namespace App\Listeners;

use App\Events\StockOutputCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class DecreaseStockListener
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
     * @param  StockOutputCreated  $event
     * @return void
     */
    public function handle(StockOutputCreated $event)
    {
        //
        $output = $event->getOutput();
        $product = $output->product;
        $product->stock = $product->stock - $output->quantity;
        $product->save();
        \Log::notice("A new {$product->name} product output was added");
        \Log::info("{$product->name} product stock has decreased by: {$output->quantity} items");
    }
}
