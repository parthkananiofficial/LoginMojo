<?php

namespace App\Http\Controllers;

use App\Models\SessionToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard_data  = [];

        $dashboard_data['count_today'] = $this->get_base_query()->where('created_at', '>=', $this->get_today())->count();
        $dashboard_data['count_week'] = $this->get_base_query()->where('created_at', '>=', $this->get_today()->startOfWeek())->count();
        $dashboard_data['count_month'] = $this->get_base_query()->where('created_at', '>=', $this->get_today()->startOfMonth())->count();
        $dashboard_data['count_year'] = $this->get_base_query()->where('created_at', '>=', $this->get_today()->startOfYear())->count();

        $dashboard_data['count_yesterday'] = $this->get_base_query()->whereBetween('created_at', [$this->get_today()->subDay(), $this->get_today()])->count();
        $dashboard_data['count_last_week'] = $this->get_base_query()->whereBetween('created_at', [$this->get_today()->startOfWeek()->subWeek(), $this->get_today()->startOfWeek()])->count();
        $dashboard_data['count_last_month'] = $this->get_base_query()->whereBetween('created_at', [$this->get_today()->startOfMonth()->subMonth(), $this->get_today()->startOfMonth()])->count();
        $dashboard_data['count_last_year'] = $this->get_base_query()->whereBetween('created_at', [$this->get_today()->startOfYear()->subYear(), $this->get_today()->startOfYear()])->count();

        $dashboard_data['hike_today'] = $this->calculate_hike($dashboard_data['count_today'], $dashboard_data['count_yesterday']);
        $dashboard_data['hike_week'] = $this->calculate_hike($dashboard_data['count_week'], $dashboard_data['count_last_week']);
        $dashboard_data['hike_month'] = $this->calculate_hike($dashboard_data['count_month'], $dashboard_data['count_last_month']);
        $dashboard_data['hike_year'] = $this->calculate_hike($dashboard_data['count_year'], $dashboard_data['count_last_year']);

        $checklists = [];
        if(Auth::user()->credit > 0)
        {
            $checklists['credit_status'] = true;
            $checklists['credit'] = Auth::user()->credit;
        }else{
            $checklists['credit_status'] = false;
            $checklists['credit'] = Auth::user()->credit;
        }

        $now = new Carbon;
        if(Auth::user()->expired_at > $now)
        {
            $checklists['validity_status'] = true;
            $checklists['validity'] = Auth::user()->expired_at;
        }else{
            $checklists['validity_status'] = false;
            $checklists['validity'] = Auth::user()->expired_at;
        }

        if(count(Auth::user()->tokens) > 0)
        {
            $checklists['api_status'] = true;
        }else{
            $checklists['api_status'] = false;
        }
        if(count(Auth::user()->userwebhook) > 0)
        {
            $checklists['webhook_status'] = true;
        }else{
            $checklists['webhook_status'] = false;
        }


        $session_tokens = SessionToken::where('user_id',Auth::user()->id)->latest()->take(5)->get();

        return view('dashboard', compact('dashboard_data','checklists','session_tokens'));
    }

    function get_base_query()
    {
        return SessionToken::where("user_id", auth()->user()->id);
    }

    function get_today()
    {
        return Carbon::today();
    }

    function calculate_hike($current, $previous)
    {
        // Log::debug("Current :" . $current . " Previous: " . $previous);
        $hike = null;
        $factor = 0;

        if ($current == 0 && $previous == 0) {
            $hike = 0;
        } else if ($current != 0 && $previous == 0) {
            $hike = 100;
        } else if ($current != 0 && $previous != 0) {
            $factor = $current / $previous;
        } else if ($current == 0 && $previous != 0) {
            $hike = -100;
        }
        // Log::debug("Factor :" . $factor);

        if (isset($hike)) {
            // Log::debug("Hike :" . $hike);
            return $hike;
        }else{
            $hike = round(($factor - 1) * 100, 1);
        }
        // Log::debug("Hike :" . $hike);
        return $hike;
    }
    function login()
    {
        if (Auth::user()){
            return redirect('/dashboard');
        }
        return view('landing.index');
    }
}
