<?php

namespace App\Listeners;

use App\Models\TotalPrice;
use App\Mail\SendEmilPrice;
use App\Events\SetPriceProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SetPricelistener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SetPriceProduct $event): void
    {
        $SetPrice = new TotalPrice;
        $SetPrice->total_price = $event->price;  
        $SetPrice->save();
        Mail::to($event->email)->send(new SendEmilPrice());
    }
}