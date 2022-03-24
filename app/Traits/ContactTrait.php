<?php
  
namespace App\Traits;
use App\Models\Contactus;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;  
use Illuminate\Http\Request;
  
trait ContactTrait {
  
    /**
     * @param Request $request
     * @return $this|false|string
     */
    public function contact(Request $request) {
        $data = $request->except('_token');
        Contactus::updateOrCreate($data);
        $email_data = array( 'email' => "rizwan.13347@gmail.com","jahanzaib.shakeel.75@gmail.com", 'data'  => $data);
        Mail::send('Front.Pages.Email.contactus', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'])->subject('Covid-19 Send Email')->from($email_data["data"]["email"], "Covid-19 Email");
        });
        if (Mail::failures()) {
            $type = 'error';
            $message = "Unknonw error occur";
        }
        // $receiverNumber = '+923047122971';
        //     $msg ='Thanku for contect us and docter contect you after 24 hours' ;
        //     $account_sid = getenv("TWILIO_SID");
        //     $auth_token = getenv("TWILIO_TOKEN");
        //     $twilio_number = getenv("TWILIO_NUMBER");
        //     $client = new Client($account_sid, $auth_token);
        //     $client->messages->create($receiverNumber, [
        //         'from' => $twilio_number,
        //         'body' => $msg,
        //     ]);
       return $request;
    }
  
}