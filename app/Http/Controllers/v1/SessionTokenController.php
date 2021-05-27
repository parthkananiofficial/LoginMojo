<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Traits\LogTrait;
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
    use LogTrait;
    public $timings = [];
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $input = $request->all();

        $user = auth()->user();
        $auth_id = auth()->user()->id;
        $response = [];
        $settings = $user->settings()->all();
        if (isset($input['website_session'])) {
            Log::debug("Token Request Initiated : " . $input['website_session']);
            if ($user->credit > 0 && $user->expired_at > now()) {

                $this->log_start_task('token_generation');
                $token = $this->generate_token($auth_id); //Str::uuid();
                $this->log_stop_task('token_generation');

                $token = str_replace("-", "", $token);
                $sesssionToken = [
                    "user_id" => $auth_id,
                    "token" => $token,
                    "website_session" => $input['website_session'],
                ];

                //create meta entry if any
                if (isset($input['meta']) && is_array($input['meta']) && count($input['meta']) > 0) {
                    $sesssionToken['meta'] = json_encode($input['meta']);
                    if (strlen($sesssionToken['meta']) > 1000) {
                        $sesssionToken['meta'] = json_encode([
                            "code" => "ERROR_META. Reduce your meta data in Request payload or contact customer support."
                        ]);
                    }
                }

                $this->log_start_task('token_creation_db');
                $sesssionToken = SessionToken::create($sesssionToken);
                $this->log_stop_task('token_creation_db');

                $this->log_start_task('uuid_to_emoji');
                $encoded_token = $this->uuid_to_emoji((string) $sesssionToken->token);
                $token_id = $this->uuid_to_emoji((string) $sesssionToken->id);
                $auth_id = $this->uuid_to_emoji((string) $auth_id);
                $this->log_stop_task('uuid_to_emoji');

                $message = "";
                if($settings['login_request_message_template'] != "")
                {
                    $message = $token_id . '.' . $auth_id . '. .' . $encoded_token . '. %0a';
                    $message .= $settings['web_domain']. ' %0a';
                    $message .= $settings['login_request_message_template'];
                }else{
                    $message = $token_id . '.' . $auth_id . '. *Good Thought* .' . $encoded_token . '. %0a';
                    $message .= '%0a';
                    $message .= '"When you are uncertain, pause and wait for clarity to come before making any decision." *Daaji*';
                    $message .= '%0a';
                    $message .= '%0a';
                    $message .= '☑️Send this message as it is to continue Login process%0a';
                    $message .= '⚠️Do not send your queries on this number%0a';
                }

                $response = [
                    "success" => true,
                    "token" => $sesssionToken->token,
                    "website_session" => $sesssionToken->website_session,
                    "message" => $message,
                    "server_mobile" => '917990084081',
                    "credit_balance" => $user->credit,
                    "credit_expired_at" => $user->expired_at,
                    "code" => "S_TOKEN",
                ];
            } elseif ($user->credit <= 0) {
                $response = [
                    "success" => false,
                    "error_message" => "Your don't have sufficient balance",
                    "code" => "E_ZERO_CREDIT",
                ];
            } elseif ($user->expired_at <= now()) {
                $response = [
                    "success" => false,
                    "error_message" => "Your account is expired",
                    "code" => "E_ZERO_VALIDITY",
                ];
            }
        } else {
            $response = [
                "success" => false,
                "error_message" => "Request payload structure is not proper",
                "code" => "E_FORMAT",
            ];
        }
        Log::debug(json_encode($response));
        $this->log_print_timings($this->timings);
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
        $sesssionToken = SessionToken::where($sesssionToken)->whereBetween('created_at', [now()->subMinutes(5), now()])->first();
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
