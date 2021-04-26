<?php

namespace App\Http\Controllers;

use App\Models\SessionToken;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SessionTokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return "";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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

        $user_message = $this->uuid_to_emoji((string) $sesssionToken->token);
        $response = [
            "token" => $sesssionToken->token,
            "website_session" => $sesssionToken->website_session,
            "message" => $user_message,
            "server_mobile" => '919898388622',
        ];
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
            $response["mobile"] = $sesssionToken['mobile'];
            return response()->json($response);
        }
        return response()->json($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SessionToken  $sessionToken
     * @return \Illuminate\Http\Response
     */
    public function edit(SessionToken $sessionToken)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SessionToken  $sessionToken
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $input = $request->all();
        $admin_user = auth()->user();
        $admin_settings = $admin_user->settings()->all();

        $recipient_message = $this->deduce_message($input['message']);
        $sesssionToken = SessionToken::where(["token" => $recipient_message])->first();

        $response = [];
        if ($sesssionToken) {
            $user = User::find($sesssionToken['user_id']);
            $settings = User::find($sesssionToken['user_id'])->settings()->all();
            if ($sesssionToken['mobile'] === null) {
                $throttle_pass = true;

                //check throttle condition
                if ($settings['throttle'] > 0 && $this->dailyThrottleCount($input['mobile'], $sesssionToken['user_id']) > $settings['throttle']) {
                    $throttle_pass = false;
                }
                if ($throttle_pass) {
                    $sesssionToken->update(["mobile" => $input['mobile']]);
                    $user->useCredit(); // less credit
                    $response["reply"] = $settings['valid_message_template'];
                } else {
                    $response["reply"] = $settings['throttle_message_template'];
                }
            } else {
                $response["reply"] = $settings['duplicate_session_message_template'];
            }
        } else {
            $response["reply"] = $admin_settings['invalid_message_template'];
        }
        return response()->json($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SessionToken  $sessionToken
     * @return \Illuminate\Http\Response
     */
    public function destroy(SessionToken $sessionToken)
    {
        //
    }

    public function dailyThrottleCount($mobile, $user_id)
    {
        return SessionToken::where(['mobile' => $mobile, 'user_id' => $user_id])
            ->where('created_at', '>=', Carbon::today())
            ->get()->count();
    }


    public function deduce_message($message)
    {
        //TODO :: Deduce the message using Regex or some other tricks
        return $this->emoji_to_uuid($message);
    }

    public function uuid_to_emoji($str)
    {
        $string_to_emoji = [];
        $string_to_emoji["a"] = "😃";
        $string_to_emoji["b"] = "🔣";
        $string_to_emoji["c"] = "🤩";
        $string_to_emoji["d"] = "🤪";
        $string_to_emoji["e"] = "🤭";
        $string_to_emoji["f"] = "🤫";
        $string_to_emoji["g"] = "🤨";
        $string_to_emoji["h"] = "🤮";
        $string_to_emoji["i"] = "🤯";
        $string_to_emoji["j"] = "🧐";
        $string_to_emoji["k"] = "🤬";
        $string_to_emoji["l"] = "🧡";
        $string_to_emoji["m"] = "🤟";
        $string_to_emoji["n"] = "🤲";
        $string_to_emoji["o"] = "🧠";
        $string_to_emoji["p"] = "🧒";
        $string_to_emoji["q"] = "🧑";
        $string_to_emoji["r"] = "🧔";
        $string_to_emoji["s"] = "🧓";
        $string_to_emoji["t"] = "🧕";
        $string_to_emoji["u"] = "🤱";
        $string_to_emoji["v"] = "🧙";
        $string_to_emoji["w"] = "🧚";
        $string_to_emoji["x"] = "🧛";
        $string_to_emoji["y"] = "🧜";
        $string_to_emoji["z"] = "🧝";
        $string_to_emoji["0"] = "🧞";
        $string_to_emoji["1"] = "🧟";
        $string_to_emoji["2"] = "🧖";
        $string_to_emoji["3"] = "🧗";
        $string_to_emoji["4"] = "🧘";
        $string_to_emoji["5"] = "🦓";
        $string_to_emoji["6"] = "🦒";
        $string_to_emoji["7"] = "🦔";
        $string_to_emoji["8"] = "🦕";
        $string_to_emoji["9"] = "🦖";
        $emojis = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $emojis .= $string_to_emoji[$str[$i]];
        }
        return $emojis;
    }
    public function emoji_to_uuid($emojis)
    {
        $emoji_to_string = [];
        $emoji_to_string["😃"] = "a";
        $emoji_to_string["🔣"] = "b";
        $emoji_to_string["🤩"] = "c";
        $emoji_to_string["🤪"] = "d";
        $emoji_to_string["🤭"] = "e";
        $emoji_to_string["🤫"] = "f";
        $emoji_to_string["🤨"] = "g";
        $emoji_to_string["🤮"] = "h";
        $emoji_to_string["🤯"] = "i";
        $emoji_to_string["🧐"] = "j";
        $emoji_to_string["🤬"] = "k";
        $emoji_to_string["🧡"] = "l";
        $emoji_to_string["🤟"] = "m";
        $emoji_to_string["🤲"] = "n";
        $emoji_to_string["🧠"] = "o";
        $emoji_to_string["🧒"] = "p";
        $emoji_to_string["🧑"] = "q";
        $emoji_to_string["🧔"] = "r";
        $emoji_to_string["🧓"] = "s";
        $emoji_to_string["🧕"] = "t";
        $emoji_to_string["🤱"] = "u";
        $emoji_to_string["🧙"] = "v";
        $emoji_to_string["🧚"] = "w";
        $emoji_to_string["🧛"] = "x";
        $emoji_to_string["🧜"] = "y";
        $emoji_to_string["🧝"] = "z";
        $emoji_to_string["🧞"] = "0";
        $emoji_to_string["🧟"] = "1";
        $emoji_to_string["🧖"] = "2";
        $emoji_to_string["🧗"] = "3";
        $emoji_to_string["🧘"] = "4";
        $emoji_to_string["🦓"] = "5";
        $emoji_to_string["🦒"] = "6";
        $emoji_to_string["🦔"] = "7";
        $emoji_to_string["🦕"] = "8";
        $emoji_to_string["🦖"] = "9";
        $chrArray = preg_split('//u', $emojis, -1, PREG_SPLIT_NO_EMPTY);

        $string = "";
        for ($i = 0; $i < sizeof($chrArray); $i++) {
            if (isset($emoji_to_string[$chrArray[$i]])) {
                $string .= $emoji_to_string[$chrArray[$i]];
            } else {
                $string .= $chrArray[$i];
            }
        }
        return $string;
    }

    private function generate_token($unique_id)
    {
        $token = Str::uuid();
        return  $token;
    }
}
