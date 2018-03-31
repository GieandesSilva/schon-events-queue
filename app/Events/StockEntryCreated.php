<?php

namespace App\Events;

use App\Models\StockEntry;

class StockEntryCreated
{
//    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $entry;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(StockEntry $entry)
    {
        //
        $this->entry = $entry;
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
     * @return StockEntry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
