<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewOrderCreated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $order;

    public function __construct(Order $order)
    {
        $this->order = json_encode($order->fullInfo);
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return PrivateChannel|array
     */
    public function broadcastOn(): PrivateChannel|array
    {
        return new PrivateChannel('whole-cow-356');
    }
}
