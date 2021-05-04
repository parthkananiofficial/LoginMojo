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
            if (isset($response['reply']))
                $this->send_message($mobile, $response["reply"], "LOGIN");
        }
        return response()->json(['success' => 'success'], 200);
    }
}
