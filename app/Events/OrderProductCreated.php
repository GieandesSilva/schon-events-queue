<?php

namespace App\Events;

use App\Models\OrderProduct;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class OrderProductCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var OrderProduct
     */
    private $orderProduct;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(OrderProduct $orderProduct)
    {
        //
        $this->orderProduct = $orderProduct;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }

    /**
     * @return OrderProduct
     */
    public function getProduct()
    {
        return $this->orderProduct;
    }

}
