<?php

namespace App\Listeners;

use App\Http\Traits\WhatsAppTrait;
use App\Models\UserWebhookLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\WebhookServer\Events\WebhookCallSucceededEvent;

class WebhookCallSucceeded
{
    use WhatsAppTrait;
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
     * @param  Spatie\WebhookServer\Events\WebhookCallSucceededEvent $event
     * @return void
     */
    public function handle(WebhookCallSucceededEvent $event)
    {
        Log::debug("WebhookCallSucceeded");
        Log::debug(json_encode($event));
        $log = [
            "uuid" => $event->uuid,
            "user_id" => $event->meta["user_id"],
            "webhook_id" => $event->meta["webhook_id"],
            "payload" => json_encode($event->payload),
            "response" => $event->response->getBody()->getContents(),
            "status" => $event->response->getStatusCode(),
        ];
        UserWebhookLog::create($log);
        $this->send_message($event->payload['mobile'], $event->meta["reply"], "LOGIN");
    }
}
