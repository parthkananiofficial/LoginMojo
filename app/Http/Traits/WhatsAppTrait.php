<?php

namespace App\Http\Traits;

use App\Models\SessionToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Spatie\WebhookServer\WebhookCall;

trait WhatsAppTrait
{
    public function readMessage($message, $mobile, $name = null)
    {
        Log::debug("Message : " . $message . ", Mobile : " . $mobile. ", Name : " . $name);
        $result = explode(".", $message);
        $response = [];

        //check the auth_id and token is inside the message or not
        if (count($result) >= 3) {
            $token_id = $this->emoji_to_uuid($result[0]);
            $user_id = $this->emoji_to_uuid($result[1]);
            $token = $this->emoji_to_uuid($result[3]);

            //check the token where token_id, user_id, and token is matching
            $sesssionToken = SessionToken::where([
                "id" => $token_id,
                "user_id" => $user_id,
                "token" => $token
            ])
                ->whereBetween('created_at', [now()->subMinutes(5), now()])
                ->first();

            //test token $sesssionToken = SessionToken::find(33);
            if ($sesssionToken) {
                $user = User::find($sesssionToken['user_id']);
                //this is temporary
                $settings = User::find($sesssionToken['user_id'])->settings()->all();
                if ($sesssionToken['mobile'] === null) {
                    $throttle_pass = true;

                    //check throttle condition
                    if ($settings['throttle'] > 0 && $this->dailyThrottleCount($mobile, $sesssionToken['user_id']) > $settings['throttle']) {
                        $throttle_pass = false;
                    }
                    if ($throttle_pass) {
                        $sesssionToken->update(["mobile" => $mobile, "name" => $name]);
                        $user->useCredit(); // less credit

                        //it's time to call client
                        $this->call_user_webhook($user,$sesssionToken);

                        $response["reply"] = $settings['valid_message_template'];
                    } else {
                        $response["reply"] = $settings['throttle_message_template'];
                    }
                } else {
                    $response["reply"] = $settings['duplicate_session_message_template'];
                }
            } else {
                $response["reply"] = "Invalid Request or Expired";
            }
        }
        Log::debug(json_encode($response));
        return $response;
    }

    public function dailyThrottleCount($mobile, $user_id)
    {
        return SessionToken::where(['mobile' => $mobile, 'user_id' => $user_id])
            ->where('created_at', '>=', Carbon::today())
            ->get()->count();
    }

    public function deduce_message($message)
    {
        $result = explode(".", $message);

        $a = [];
        $a['id'] = $result[0];
        $a['user_id'] = $result[1];
        $a['token'] = $result[3];
        return $a;
    }

    public function uuid_to_emoji($str)
    {
        $string_to_emoji = [];
        $string_to_emoji["0"] = "⠼⠚";
        $string_to_emoji["1"] = "⠼⠁";
        $string_to_emoji["2"] = "⠼⠃";
        $string_to_emoji["3"] = "⠼⠉";
        $string_to_emoji["4"] = "⠼⠙";
        $string_to_emoji["5"] = "⠼⠑";
        $string_to_emoji["6"] = "⠼⠋";
        $string_to_emoji["7"] = "⠼⠛";
        $string_to_emoji["8"] = "⠼⠓";
        $string_to_emoji["9"] = "⠼⠊";

        $string_to_emoji["a"] = "⠁";
        $string_to_emoji["b"] = "⠃";
        $string_to_emoji["c"] = "⠉";
        $string_to_emoji["d"] = "⠙";
        $string_to_emoji["e"] = "⠑";
        $string_to_emoji["f"] = "⠋";
        $string_to_emoji["g"] = "⠛";
        $string_to_emoji["h"] = "⠓";
        $string_to_emoji["i"] = "⠊";
        $string_to_emoji["j"] = "⠚";
        $string_to_emoji["k"] = "⠅";
        $string_to_emoji["l"] = "⠇";
        $string_to_emoji["m"] = "⠍";
        $string_to_emoji["n"] = "⠝";
        $string_to_emoji["o"] = "⠕";
        $string_to_emoji["p"] = "⠏";
        $string_to_emoji["q"] = "⠟";
        $string_to_emoji["r"] = "⠗";
        $string_to_emoji["s"] = "⠎";
        $string_to_emoji["t"] = "⠞";
        $string_to_emoji["u"] = "⠥";
        $string_to_emoji["v"] = "⠧";
        $string_to_emoji["w"] = "⠺";
        $string_to_emoji["x"] = "⠭";
        $string_to_emoji["y"] = "⠽";
        $string_to_emoji["z"] = "⠵";
        $emojis = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $emojis .= $string_to_emoji[$str[$i]];
        }
        return $emojis;
    }

    public function emoji_to_uuid($emojis)
    {
        $emoji_to_string = [];
        $emoji_to_string["⠼⠚"] = "0";
        $emoji_to_string["⠼⠁"] = "1";
        $emoji_to_string["⠼⠃"] = "2";
        $emoji_to_string["⠼⠉"] = "3";
        $emoji_to_string["⠼⠙"] = "4";
        $emoji_to_string["⠼⠑"] = "5";
        $emoji_to_string["⠼⠋"] = "6";
        $emoji_to_string["⠼⠛"] = "7";
        $emoji_to_string["⠼⠓"] = "8";
        $emoji_to_string["⠼⠊"] = "9";
        $emoji_to_string["⠁"] = "a";
        $emoji_to_string["⠃"] = "b";
        $emoji_to_string["⠉"] = "c";
        $emoji_to_string["⠙"] = "d";
        $emoji_to_string["⠑"] = "e";
        $emoji_to_string["⠋"] = "f";
        $emoji_to_string["⠛"] = "g";
        $emoji_to_string["⠓"] = "h";
        $emoji_to_string["⠊"] = "i";
        $emoji_to_string["⠚"] = "j";
        $emoji_to_string["⠅"] = "k";
        $emoji_to_string["⠇"] = "l";
        $emoji_to_string["⠍"] = "m";
        $emoji_to_string["⠝"] = "n";
        $emoji_to_string["⠕"] = "o";
        $emoji_to_string["⠏"] = "p";
        $emoji_to_string["⠟"] = "q";
        $emoji_to_string["⠗"] = "r";
        $emoji_to_string["⠎"] = "s";
        $emoji_to_string["⠞"] = "t";
        $emoji_to_string["⠥"] = "u";
        $emoji_to_string["⠧"] = "v";
        $emoji_to_string["⠺"] = "w";
        $emoji_to_string["⠭"] = "x";
        $emoji_to_string["⠽"] = "y";
        $emoji_to_string["⠵"] = "z";

        //$chrArray = preg_split('//u', $emojis, -1, PREG_SPLIT_NO_EMPTY);
        foreach ($emoji_to_string as $key => $value) {
            $emojis = str_replace($key, $value, $emojis);
        }
        return $emojis;
    }

    private function generate_token($unique_id = null)
    {
        //$token = Str::uuid();
        // $time = substr(time(), -5); //last 4 character of the epoch time 9999 seconds unique
        $token = $this->getrandomchars(10);
        return  $token;
    }
    private function getrandomchars($n)
    {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
    private function get_string_between($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    private function send_message($mobile, $message, $type = "LOGIN")
    {
        if (!isset($message)) {
            return false;
        }

        Log::debug("Sending " . $type . " Message to " . $mobile . " Message : " . $message);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://live-server-1497.wati.io/api/v1/sendSessionMessage/' . $mobile . '?messageText=' . urlencode($message));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = array();
        $headers[] = 'Accept: */*';
        $headers[] = 'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiJkMmQ5OWIwMC1hZjRhLTQ1MjEtODg1OC02M2U0MjIxOTRhMzIiLCJ1bmlxdWVfbmFtZSI6InBhcnRoLmthbmFuaUB2ZXJzaW9uaGFzaC5jb20iLCJuYW1laWQiOiJwYXJ0aC5rYW5hbmlAdmVyc2lvbmhhc2guY29tIiwiZW1haWwiOiJwYXJ0aC5rYW5hbmlAdmVyc2lvbmhhc2guY29tIiwiaHR0cDovL3NjaGVtYXMubWljcm9zb2Z0LmNvbS93cy8yMDA4LzA2L2lkZW50aXR5L2NsYWltcy9yb2xlIjoiQURNSU5JU1RSQVRPUiIsImV4cCI6MjUzNDAyMzAwODAwLCJpc3MiOiJDbGFyZV9BSSIsImF1ZCI6IkNsYXJlX0FJIn0.uIPtQmw-a5GKrn5utc_VU2arYI5G0zfCMp3nJaOcVxA';
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            Log::debug(" ERROR : " . curl_error($ch));
        }
        curl_close($ch);
        Log::debug("RESPONSE : " . $result);
    }

    private function call_user_webhook($user, $sesssionToken)
    {
        $webhooks = $user->userwebhook()->get();
        $request_payload = [
            "token" => $sesssionToken->token,
            "website_session" => $sesssionToken->website_session,
            "mobile" => $sesssionToken->mobile,
            "name" => $sesssionToken->name,
            "meta" => json_decode($sesssionToken->meta,true),
            "timestamp" => $sesssionToken->updated_at,
        ];

        foreach ($webhooks as $webhook) {
            Log::debug("Calling webhook " . $webhook->id);
            $w = WebhookCall::create()
                ->url($webhook->url)
                ->payload($request_payload)
                ->doNotVerifySsl()
                ->meta([
                    "event" => "MESSAGE_RECEIVED_FROM_USER",
                    "user_id" => $webhook->user_id,
                    "webhook_id" => $webhook->id,
                ])
                ->timeoutInSeconds(5);
            if ($webhook->secured)
                $w->useSecret('sign-using-this-secret');
            else
                $w->doNotSign();
            $w->dispatch();

            Log::debug("dispatch");
            Log::debug(json_encode($w));
        }
        return $sesssionToken;
    }
}
