<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Porter;
use App\Sender;


class FormController extends Controller
{

    public function __construct(Porter $porter, Sender $sender){
        $this->porter = $porter;
        $this->sender = $sender;
    }

    public function store(Request $request){

        $data = $request->all();

        if($request->formType == 'porter'){

            $data['originStreetNumber'] = $data['porterOriginAddress']['street_number'];
            $data['originStreetName'] = $data['porterOriginAddress']['street_name'];
            $data['originCity'] = $data['porterOriginAddress']['city'];
            $data['originProvince'] = $data['porterOriginAddress']['province'];
            $data['originPostal'] = $data['porterOriginAddress']['postal_code'];

            $data['destinationStreetNumber'] = $data['porterDestinationAddress']['street_number'];
            $data['destinationStreetName'] = $data['porterDestinationAddress']['street_name'];
            $data['destinationCity'] = $data['porterDestinationAddress']['city'];
            $data['destinationProvince'] = $data['porterDestinationAddress']['province'];
            $data['destinationPostal'] = $data['porterDestinationAddress']['postal_code'];


            unset($data['originAddress']);
            unset($data['destinationAddress']);
            unset($data['porterDestinationAddress']);
            unset($data['porterOriginAddress']);
            // make key for departure field
            $data['departure'] = $data['departureDate'] . ' ' . date('h:i:s', strtotime($data['departureTime']));

            // get rid of unneeded keys now
            unset($data['departureDate']);
            unset($data['departureTime']);

            // create DB entry
            $porter = $this->porter->create($data);

            // SEND MAIL
            $this->porter->sendNoticeEmail($porter->id);

        } elseif ($request->formType == 'sender'){

            $data['originStreetNumber'] = $data['senderOriginAddress']['street_number'];
            $data['originStreetName'] = $data['senderOriginAddress']['street_name'];
            $data['originCity'] = $data['senderOriginAddress']['city'];
            $data['originProvince'] = $data['senderOriginAddress']['province'];
            $data['originPostal'] = $data['senderOriginAddress']['postal_code'];

            $data['destinationStreetNumber'] = $data['senderDestinationAddress']['street_number'];
            $data['destinationStreetName'] = $data['senderDestinationAddress']['street_name'];
            $data['destinationCity'] = $data['senderDestinationAddress']['city'];
            $data['destinationProvince'] = $data['senderDestinationAddress']['province'];
            $data['destinationPostal'] = $data['senderDestinationAddress']['postal_code'];

            unset($data['originAddress']);
            unset($data['destinationAddress']);
            unset($data['senderDestinationAddress']);
            unset($data['senderOriginAddress']);

            // create DB entry
            $sender = $this->sender->create($data);

            // SEND MAIL
            $this->sender->sendNoticeEmail($sender->id);
        }

        return ['status' => 'success'];

    }


    public function contactForm(Request $request){
        $title = 'A new message has been received from the contact form';

        $content = [
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'phone'     =>  $request->phone,
            'message'   =>  $request->message
        ];

        Mail::send('emails.contact', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('noreply@portagedelivers.com', 'Portage');
            $message->to(env('MAIL_ADMIN'));

        });

        echo json_encode(array('status'=>'success'));
    }


}
