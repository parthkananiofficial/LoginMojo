<?php

namespace App\Http\Controllers;

use App\Models\SessionToken;
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
    public function show(Request $request,$session)
    {

        $sesssionToken = [
            "user_id" => auth()->user()->id,
            "session" => $session,
        ];
        $sesssionToken = SessionToken::where($sesssionToken)->first();
        $response = [];
        if($sesssionToken)
        {
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

        //TODO :: To check the mobile of the sender & receiver

        $sesssionToken = SessionToken::where(
            [
                "user_id" => auth()->user()->id,
                "session" => $input['message']
            ])->first();


        $response = [];
        if($sesssionToken)
        {
            $sesssionToken->update(["mobile"=>$input['mobile']]);
            $response["reply"] = "Thanks you for Login";
            return response()->json($response);
        }
        $response["reply"] = "Error";
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
}
