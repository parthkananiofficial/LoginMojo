<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;


class WebhookController extends CashierController
{
    public function handleChargeSucceeded($payload)
    {
        return $payload;
    }

    public function handleCheckoutSessionCompleted($payload)
    {
        if (isset($payload['data']['object']['metadata']['plan_code'])) {
            $plan_code = $payload['data']['object']['metadata']['plan_code'];
            $user = $this->getUserByStripeId($payload['data']['object']['customer']);
            $user_details = $this->getUserByStripeId($payload['data']['object']['customer_details']);
            $plans = Plan::PLANS;
            if (isset($plans[$plan_code])) {
                $package_verifications = $plans[$plan_code]['verifications'];
                $package_validity = $plans[$plan_code]['validity'];
                $user_verifications = $user->credit;
                $user_validity = Carbon::parse($user->expired_at);

                $new_verifications = $user_verifications + $package_verifications;
                $new_validity = $user_validity->addMonths($package_validity);
                $user->update(['expired_at'=>$new_validity,'credit'=>$new_verifications]);
                if($user->email == null)
                {
                    $user->update(['email'=>$user_details['email']]);
                }
            }else{
                //throw error to check the plan is not available
            }
        }
        return $payload;
    }
}
