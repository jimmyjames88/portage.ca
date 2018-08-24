<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

use App\Helpers\FormattedAddress;


class Porter extends Model
{
    protected $guarded = ['id', 'formType'];

    public function sendNoticeEmail($id){

        $type = 'porter';
        $title = ucwords($type) . ' submission has been received';

        Mail::send('emails.notice', ['title' => $title, 'id' => $id, 'type' => $type], function ($message)
        {
            $message->subject('New Porter Submission!');
            $message->from('noreply@portagedelivers.com', 'Portage');

            $message->to(env('MAIL_ADMIN'));

        });
    }
}
