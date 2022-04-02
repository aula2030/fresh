<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewOrderCreated implements ShouldBroadcastNow
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $order;

    public function __construct()
    {
        $this->order = json_encode([
            'reference' => '1A2B3C',
            'date' => '2022-04-02 16:00:00',
            'customer' => 'John Doe',
            'address' => 'Champs Elisees 1, Paris',
            'country' => 'Francia',
            'products' => ['Manzanas', 'Peras'],
            'state' => 'Pagado'
        ]);
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
