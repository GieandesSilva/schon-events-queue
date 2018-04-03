<?php

namespace App\Listeners;

use App\Events\OrderProductCreated;
use App\Traits\DecrementStocks;

class DecrementStockFromCheckoutListener
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
     * @param  OrderProductCreated  $event
     * @return void
     */
    public function handle(OrderProductCreated $event)
    {
        //
        $orderProduct = $event->getProduct();
        $this->decrement($orderProduct->product, $orderProduct->quantity);
    }
}
