<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\WhatsAppTrait;
use App\Models\SessionToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SessionTokenController extends Controller
{

    use WhatsAppTrait;
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $auth_id = auth()->user()->id;

        $token = $this->generate_token($auth_id); //Str::uuid();

        $token = str_replace("-", "", $token);
        $sesssionToken = [
            "user_id" => $auth_id,
            "token" => $token,
            "website_session" => $input['website_session'],
        ];
        $sesssionToken = SessionToken::create($sesssionToken);

        $encoded_token = $this->uuid_to_emoji((string) $sesssionToken->token);
        $token_id = $this->uuid_to_emoji((string) $sesssionToken->id);
        //$user_message = $sesssionToken->token;
        $auth_id = $this->uuid_to_emoji((string) $auth_id);


        $message = $token_id . '.' . $auth_id . '. *Thought of the day* .' . $encoded_token . '. %0a';
        $message .= '%0a';
        $message .= '"When you are uncertain, pause and wait for clarity to come before making any decision." *Daaji*';
        $message .= '%0a';
        $message .= '%0a';
        $message .= '--- Send this message to get Login ---%0a';

        $response = [
            "token" => $sesssionToken->token,
            "website_session" => $sesssionToken->website_session,
            "message" => $message,
            "server_mobile" => '917990084081',
        ];
        Log::debug(json_encode($response));
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $token)
    {
        $sesssionToken = [
            "user_id" => auth()->user()->id,
            "token" => $token,
        ];
        $sesssionToken = SessionToken::where($sesssionToken)->first();
        $response = [];
        if ($sesssionToken) {
            $response["token"] = $sesssionToken['token'];
            $response["website_session"] = $sesssionToken['website_session'];
            $response["name"] = $sesssionToken['name'];
            $response["mobile"] = $sesssionToken['mobile'];
            return response()->json($response);
        }
        return response()->json($response);
    }
}   

