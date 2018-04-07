<?php

namespace App\Listeners;

use App\Events\PaymentCompleted;
use App\Mail\PaymentCompletedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailPaymentCompletedListener
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
        \Mail::to($order->user)->send(new PaymentCompletedMail($order, $order->user));

    }
}
