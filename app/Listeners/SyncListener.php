<?php

namespace App\Listeners;

use App\Events\SyncEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SyncListener
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
     * @param  SyncEvent  $event
     * @return void
     */
    public function handle(SyncEvent $event)
    {
        file_put_contents('C:\Users\Elmer\Desktop\docs\file_event.txt', '****DESDE LISTENER****
', FILE_APPEND);
    }
}
