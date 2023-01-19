<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Mail\OrderShippedMail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendShipmentNotification implements ShouldQueue
{
    public function handle($event): void
    {
        Mail::to($event->order->email)->send(new OrderShippedMail($event->order));
    }
}
