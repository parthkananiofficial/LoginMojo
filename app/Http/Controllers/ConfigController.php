<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config.edit');
    }
    public function edit()
    {
        $user = Auth::user();
        $settings = $user->settings()->all();
        return View::make('config.edit',compact('settings'));
    }

    public function update(Request $request)
    {
        $input = $request->all();

        $user = Auth::user();
        $user->settings()->setMultiple([
            'common_number' => true,//$input['common_number'],
            'throttle' => $input['throttle'],
            'valid_message_template' => $input['valid_message_template'],
            'invalid_message_template' => $input['invalid_message_template'],
            'throttle_message_template' => $input['throttle_message_template'],
            'duplicate_session_message_template' => $input['duplicate_session_message_template'],
        ]);

        if($input['valid_message_template'] == "")
        {
            $user->settings()->delete('valid_message_template');
        }
        if($input['invalid_message_template'] == "")
        {
            $user->settings()->delete('invalid_message_template');
        }
        if($input['throttle_message_template'] == "")
        {
            $user->settings()->delete('throttle_message_template');
        }
        if($input['duplicate_session_message_template'] == "")
        {
            $user->settings()->delete('duplicate_session_message_template');
        }
        return redirect()->route('config.edit');
    }
}
