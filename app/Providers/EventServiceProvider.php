<?php

namespace App\Providers;

use App\Models\Order;
use App\Events\OrderShipped;
use App\Observers\OrderObserver;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\SendShipmentNotification;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        OrderShipped::class => [
            SendShipmentNotification::class,
        ],
    ];

    public function boot(): void
    {
        Order::observe(OrderObserver::class);
    }

    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
