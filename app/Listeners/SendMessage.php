<?php

namespace App\Listeners;

use App\Events\RegisterOk;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMessage
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
     * @param  RegisterOk  $event
     * @return void
     */
    public function handle(RegisterOk $event)
    {
        //
    }
}
