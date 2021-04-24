<?php

namespace App\Http\Controllers;

use App\Models\SessionToken;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return view('dashboard', compact('dashboard_data'));
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
        $factor = 0;
        if ($previous != 0) {
            $factor = $current / $previous;
        }

        if ($factor != 0) {
            return round(($factor - 1) * 100,1);
        } else {
            return 100;
        }
    }
}
