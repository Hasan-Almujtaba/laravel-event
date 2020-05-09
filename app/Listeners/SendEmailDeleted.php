<?php

namespace App\Listeners;

use App\Events\DeletedUser;
use App\Mail\UserDeleted;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendEmailDeleted implements ShouldQueue
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
     * @param  DeletedUser  $event
     * @return void
     */
    public function handle(DeletedUser $event)
    {
        Mail::to($event->user->email)->send(new UserDeleted($event->user));
    }
}
