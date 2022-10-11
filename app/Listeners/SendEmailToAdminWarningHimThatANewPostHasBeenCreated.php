<?php

namespace App\Listeners;

use App\Events\PostCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailToAdminWarningHimThatANewPostHasBeenCreated
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
     * @param  PostCreated  $event
     * @return void
     */
    public function handle(PostCreated $event)
    {
        Mail::to('domi@domy.be')
            ->send(new \App\Mail\PostCreated($event->post));
    }
}
