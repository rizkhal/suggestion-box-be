<?php

namespace App\Events;

use App\Models\Suggestion;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SuggestionSelectedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public Suggestion $suggestion
    ) {
        // 
    }

    public function broadcastOn()
    {
        return new Channel('suggestion-selected');
    }
}
