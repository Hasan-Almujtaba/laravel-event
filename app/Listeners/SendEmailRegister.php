<?php

namespace App\Listeners;

use App\Events\SendEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegistered;
use App\User;

class SendEmailRegister implements ShouldQueue
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
     * @param  SendEmail  $event
     * @return void
     */
    public function handle(SendEmail $event)
    {
        Mail::to($event->user->email)->send(new UserRegistered($event->user));
    }
}
