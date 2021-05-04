<?php

namespace App\Providers;

use App\Listeners\FinalWebhookCallFailed;
use App\Listeners\WebhookCallFailed;
use App\Listeners\WebhookCallSucceeded;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        \Spatie\WebhookServer\Events\FinalWebhookCallFailedEvent::class => [
            FinalWebhookCallFailed::class,
        ],\Spatie\WebhookServer\Events\WebhookCallFailedEvent::class => [
            WebhookCallFailed::class,
        ],\Spatie\WebhookServer\Events\WebhookCallSucceededEvent::class => [
            WebhookCallSucceeded::class
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
