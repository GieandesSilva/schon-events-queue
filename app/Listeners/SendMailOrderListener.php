<?php

namespace App\Listeners;

use App\Events\OrderCreatedFully;
use App\Mail\OrderCreated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailOrderListener
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
     * @param  OrderCreatedFully  $event
     * @return void
     */
    public function handle(OrderCreatedFully $event)
    {
        //
        $order = $event->getOrder();
        \Mail::to($order->user)->send(new OrderCreated($order, $order->user));
    }
}
