<?php

namespace App\Listeners;

use App\Events\PaymentCompleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use PDF;

class GenerateReceiptListener
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
     * @param  PaymentCompleted  $event
     * @return void
     */
    public function handle(PaymentCompleted $event)
    {
        //
        $order = $event->getOrder();
        $pdf = PDF::loadView('receipt.order-completed', compact('order'));
        $pdf->save(storage_path("app/orders/order-{$order->id}.pdf"));
    }
}
