<?php

namespace App\Http\Controllers;

use App\Models\UserWebhook;
use App\Models\UserWebhookLog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserWebhookController extends Controller
{
    public function index()
    {
        $webhooks = Auth::user()->userwebhook()->get();
        return view('userwebhook.index', compact('webhooks'));
    }

    public function edit(Request $request)
    {
        $webhooks = Auth::user()->userwebhook()->get();
        return view('userwebhook.edit', compact('webhooks'));
    }
    public function store(Request $request)
    {

        $request->validate([
            'url' => 'required'
        ]);
        $input = $request->all();

        UserWebhook::create([
            "user_id" => Auth::user()->id,
            "url" => $input["url"],
            "secured" => (isset($input["secured"]) && $input["secured"] == "on") ? true : false,
            "signature" => "whsec_". Str::random(32),
        ]);
        return redirect()->route('userwebhook.index');
    }
    public function destroy($id)
    {
        UserWebhook::where('id', $id)->where('user_id',Auth::user()->id)->firstorfail()->delete();
        Session::flash('flash.banner', "Webhook Deleted Successfully");

        return redirect()->route('userwebhook.index');
    }
    public function logs()
    {
        $webhooks_logs =  UserWebhookLog::where('user_id',Auth::user()->id)->take(50)->get();
        return view('userwebhook.logs',compact('webhooks_logs'));
    }
}
