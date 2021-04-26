<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhatsAppWebHookController extends Controller
{
    public function handleReceiveMessage(Request $request)
    {
        $input =  $request->all();
        return $input;
    }
}
