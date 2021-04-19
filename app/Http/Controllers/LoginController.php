<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    public function index()
    {

    }

    private $whatSenderURL = "https://loginwithwhatsapp.com";
    //private $whatSenderURL = "http://dev.whatserver.com";
    private $api_secret = "wkwArf0T3HlO9ftCXkiRvYIojDxfvG7xF8Dcr7Jb";
    //public $api_secret = "n1fOKJLINnYED0vytqWAxw5yAI2hF2KTwlp26If7";
    public $whatsapp_url = "https://api.whatsapp.com/send/?phone={{phone}}&text={{message}}";
    public $phone = "917990084081"; //with country code

    public function whatStore(Request $request)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $this->whatSenderURL.'/api/token/create',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
            "website_session" : "'. Str::uuid().'"
        }',
        CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Authorization: Bearer '.$this->api_secret,
            'Content-Type: application/json'
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($response,true);
        if(isset($response['token']))
        {
            session(['whatserver_token'=>$response['token']]);
            $url = str_replace("{{phone}}",$this->phone,$this->whatsapp_url);
            $url = str_replace("{{message}}",$response['message'],$url);
            return Redirect::to($url);
        }
    }
    public function whatshow(Request $request)
    {
        $occurance = 0;
        $response = [];
        $token = session('whatserver_token');
        while($occurance < 10)
        {
            $occurance++;

            $response = $this->checkuserisloggedinornot($token);
            $response = json_decode($response,true);
            if(isset($response['mobile']) && $response['mobile'] != null)
            {
                $phone = $response['mobile'];
                $phone = str_replace(" ","",$phone);
                $user = User::where(["mobile"=>$phone])->first();
                if($user){
                    Auth::loginUsingId($user['id']);
                }else{
                    $user = User::create([
                        'name' => null,
                        'mobile' => $phone,
                        'email' => null,
                        'password' => null,
                    ]);
                    Auth::loginUsingId($user->id);
                }
                return redirect()->route('dashboard');
            }else{
                sleep(5);
            }
        }
        Session::flash('message', "We can't listen from WhatSender");
        return Redirect::back();
    }

    function checkuserisloggedinornot($token)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $this->whatSenderURL.'/api/token/'.$token,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'Accept: application/json',
            'Authorization: Bearer '.$this->api_secret,
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }

}
