<?php

namespace App\Listeners;

use App\Models\UserWebhookLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\WebhookServer\Events\FinalWebhookCallFailedEvent;

class FinalWebhookCallFailed
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
     * @param  Spatie\WebhookServer\Events\FinalWebhookCallFailedEvent $event
     * @return void
     */
    public function handle(FinalWebhookCallFailedEvent $event)
    {
        Log::debug("FinalWebhookCallFailed");
        Log::debug(json_encode($event));
        
    }
}
