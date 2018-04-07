<?php
/**
 * Created by PhpStorm.
 * User: silva
 * Date: 03/04/18
 * Time: 22:08
 */

namespace App\Models\Payment;


use App\Events\PaymentCompleted;
use App\Listeners\SendMailPaymentCompletedListener;
use App\Models\Order;

class PaymentGateway
{

    public function payment(Order $order)
    {
        \Log::info("Starting payment from order: {$order->id}");
        sleep(5);
        \Log::info("Payment completed from order: {$order->id}");
        event(new PaymentCompleted($order));
    }
}