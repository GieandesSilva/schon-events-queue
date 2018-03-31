<?php

namespace App\Events;

use App\Models\StockOutput;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StockOutputCreated
{
//    use Dispatchable, InteractsWithSockets, SerializesModels;
    /**
     * @var StockOutput
     */
    private $output;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(StockOutput $output)
    {
        //
        $this->output = $output;
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
     * @return StockOutput
     */
    public function getOutput(): StockOutput
    {
        return $this->output;
    }
}
