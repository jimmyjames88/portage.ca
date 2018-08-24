<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Sender extends Model
{
    protected $guarded = ['id', 'formType'];

    public function sendNoticeEmail($id){

        $type = 'sender';
        $title = ucwords($type) . ' submission has been received';

        Mail::send('emails.notice', ['title' => $title, 'id' => $id, 'type' => $type], function ($message)
        {

            $message->subject('New Sender Submission');
            $message->from('noreply@portagedelivers.com', 'Portage');

            $message->to(env('MAIL_ADMIN'));

        });
    }
}
