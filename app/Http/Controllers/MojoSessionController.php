<?php

namespace App\Http\Controllers;

use App\Models\MojoSession;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class MojoSessionController extends Controller
{
    private $whatSenderURL = "https://loginmojo.com";
    private $api_secret = "wkwArf0T3HlO9ftCXkiRvYIojDxfvG7xF8Dcr7Jb";

    public $whatsapp_url = "https://api.whatsapp.com/send/?phone={{phone}}&text={{message}}";
    public function __construct()
    {
        if (env('APP_ENV') == "local") {
            $this->whatSenderURL = "http://dev.whatserver.com";
            $this->api_secret = "eQhTVcloetUnaFu5VF8ZnDPXxbgo5UypHkHxC4Zv";
        }
    }


    public function store(Request $request)
    {
        Log::debug("Token Creation Request initiated");
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->whatSenderURL . '/api/v1/token/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '{
            "website_session" : "' . Str::uuid() . '"
        }',
            CURLOPT_HTTPHEADER => array(
                'Accept: application/json',
                'Authorization: Bearer ' . $this->api_secret,
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        Log::debug("Response : " . $response);

        $response = json_decode($response, true);
        if (isset($response['token'])) {
            $mojoSession = MojoSession::create([
                "website_session" => Str::uuid(),
                "token" => $response['token'],
            ]);
            session(['mojo_id' => $mojoSession->id]);
            $url = str_replace("{{phone}}", $response['server_mobile'], $this->whatsapp_url);
            $url = str_replace("{{message}}", $response['message'], $url);
            return response()->json(["url" => $url]);
        }
        return response()->json(["url" => ""]);
    }

    public function show(Request $request)
    {
        if (!Auth::user()) {
            $mojo_id = session('mojo_id');
            $mojo_session = MojoSession::find($mojo_id);
            if (isset($mojo_session['mobile'])) {
                $name = $mojo_session['name'];
                $phone = $mojo_session['mobile'];
                $user = User::where(["mobile" => $phone])->first();
                if ($user) {
                    Auth::loginUsingId($user['id']);
                } else {
                    $user = User::create([
                        'name' => $name,
                        'mobile' => $phone,
                        'email' => null,
                        'password' => null,
                        'credit' => User::DEFAULT_CREDIT,
                        'expired_at' => Carbon::now()->addDays(7)
                    ]);
                    Auth::loginUsingId($user->id);
                }
                return true;
            }
        }else{
            return true;
        }
        return false;
    }

    public function webhook(Request $request)
    {
        $input = $request->all();
        Log::debug("Final webhook called");
        Log::debug(json_encode($input));

        if(isset($input['token']))
        {
            MojoSession::where("token",$input['token'])->update([
                "mobile" => $input['mobile'],
                "name" => $input['name'],
            ]);
            Log::debug("Using webhook the record updated successfully");
            return response()->json(['success' => 'success'], 200);
        }
        return response()->json(['success' => 'false'], 403);
    }
}
