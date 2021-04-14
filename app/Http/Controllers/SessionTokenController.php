<?php

namespace App\Http\Controllers;

use App\Models\SessionToken;
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
        $sesssionToken = [
            "user_id" => auth()->user()->id,
            "session" => Str::uuid(),
            "website_session" => $input['website_session'],
        ];
        $sesssionToken = SessionToken::create($sesssionToken);

        $response = [
            "session" => $sesssionToken->session,
            "website_session" => $sesssionToken->website_session,
        ];
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $session)
    {

        $sesssionToken = [
            "user_id" => auth()->user()->id,
            "session" => $session,
        ];
        $sesssionToken = SessionToken::where($sesssionToken)->first();
        $response = [];
        if ($sesssionToken) {
            $response["session"] = $sesssionToken['session'];
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
        $user = auth()->user();
        $settings = $user->settings()->all();
        //TODO :: To check the mobile of the sender & receiver
        $sesssionToken = SessionToken::where(["session" => $input['message']])->first();

        $response = [];
        if ($sesssionToken) {
            if($sesssionToken['mobile'] === null)
            {
                $throttle_pass = true;

                //check throttle condition
                if($settings['throttle'] > 0 && $this->dailyThrottleCount($input['mobile'],$sesssionToken['user_id']) > $settings['throttle'])
                {
                    $throttle_pass = false;
                }
                if($throttle_pass)
                {
                    $sesssionToken->update(["mobile" => $input['mobile']]);
                    $response["reply"] = $settings['valid_message_template'];
                }else{
                    $response["reply"] = $settings['throttle_message_template'];
                }
            }else{
                $response["reply"] = $settings['duplicate_session_message_template'];
            }
        }else{
            $response["reply"] = $settings['invalid_message_template'];
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

    public function dailyThrottleCount($mobile,$user_id)
    {
       return SessionToken::where(['mobile'=>$mobile,'user_id'=>$user_id])
                            ->where('created_at', '>=', Carbon::today())
                            ->get()->count();
    }
}
