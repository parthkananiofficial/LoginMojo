<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Traits\WhatsAppTrait;

class WhatsAppWebHookController extends Controller
{
    use WhatsAppTrait;


    public function handleReceiveMessage(Request $request)
    {
        $input =  $request->all();
        Log::debug("WATI Webhook Received : " . json_encode($input));
        if (isset($input['type']) && $input['type'] === "text" && $input['eventType'] === "message") {
            $mobile = $input['waId']; //phone number
            $message = $input['text']; //message
            $name = $input['senderName']; //name
            $response = $this->readMessage($message, $mobile, $name);

            if (isset($response['success']) && $response['success']) {
                //if it's success then we will call the customer's webhook

                if($response['success'])
                {
                    $this->call_user_webhook($response['user'], $response['sesssionToken'],$response['reply']);
                }else{
                    $this->send_message($mobile, $response["reply"], "LOGIN");
                }
            }
        }
        return response()->json(['success' => 'success'], 200);
    }
}
