<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class PlanController extends Controller
{
    public function index()
    {
        $isIndian = Auth::user()->isIndian();
        $plans = Plan::PLANS;
        return view('plan', compact('isIndian', 'plans'));
    }
    public function show(Request $request, $plan_name)
    {
        $isIndian = Auth::user()->isIndian();
        $plan = null;
        if (isset(Plan::PLANS[$plan_name])) {
            $plan = Plan::PLANS[$plan_name];
            $plan['paymentIntent'] = Auth::user()->checkout(
                $isIndian ? $plan['inr_price_id'] : $plan['usd_price_id'],
                [
                    'metadata' => [
                        "plan_code" => $plan_name
                    ]
                ]
            );
        } else {
            abort(403);
        }
        return view('plan.show', compact('isIndian', 'plan', 'plan_name'));
    }
}
