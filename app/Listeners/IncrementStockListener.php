<?php

namespace App\Listeners;

use App\Events\StockEntryCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class IncrementStockListener
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
     * @param  StockEntryCreated  $event
     * @return void
     */
    public function handle(StockEntryCreated $event)
    {
        // Incrementa o estoque do produto
        $entry = $event->getEntry();
        $product = $entry->product;
        $product->stock = $product->stock + $entry->quantity;
        $product->save();
        \Log::notice("A new {$product->name} product entry was added");
        \Log::info("{$product->name} product stock has increased by: {$entry->quantity} items");
    }
}
