<?php

namespace App\Listeners;

use App\Events\CategoryCreation;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyAdminCategoryCreation
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
     * @param  \App\Events\CategoryCreation  $event
     * @return void
     */
    public function handle(CategoryCreation $event)
    {
        //
    }
}
