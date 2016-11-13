<?php

namespace App\Listeners;

use App\Events\UserSubmitsAnInquiry;
use App\Mail\UserInquiry;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendInquiryToAdmin
{
    /**
     * Handle the event.
     *
     * @param  UserSubmitsAnInquiry  $event
     * @return void
     */
    public function handle(UserSubmitsAnInquiry $event)
    {
        Mail::to('mark.timbol@hotmail.com')->send( new UserInquiry($event->inquiry) );
    }
}
