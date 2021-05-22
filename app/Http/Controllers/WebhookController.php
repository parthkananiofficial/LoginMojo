<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Carbon\Carbon;
use Exception;
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
            try {
                $payment_status = $payload['data']['object']['payment_status'];
                $plan_code = $payload['data']['object']['metadata']['plan_code'];
                $user = $this->getUserByStripeId($payload['data']['object']['customer']);
                $user_details = $payload['data']['object']['customer_details'];
                $plans = Plan::PLANS;
                if (isset($plans[$plan_code]) && $payment_status == "paid") {
                    $package_verifications = $plans[$plan_code]['verifications'];
                    $package_validity = $plans[$plan_code]['validity'];
                    $user_verifications = $user->credit;
                    $user_validity = Carbon::parse($user->expired_at);
                    $nowDate = Carbon::now();
                    if ($nowDate->gt($user_validity)) {
                        $user_validity = $nowDate;
                    }
                    $new_verifications = $user_verifications + $package_verifications;
                    $new_validity = $user_validity->addMonths($package_validity);

                    Log::info("Current Verifictions balance : " . $user_verifications);
                    Log::info("Adding Verifications : " . $package_verifications);
                    Log::info("Total Verifications : " . $new_verifications);

                    Log::info("Current validity:" . $user_validity);
                    Log::info("Adding validity : " . $package_validity);
                    Log::info("Updated validity:" . $new_validity);

                    $user->update(['expired_at' => $new_validity, 'credit' => $new_verifications]);
                    if (!isset($user->email) && isset($user_details['email'])) {
                        $user->update(['email' => $user_details['email']]);
                    }
                } else {
                    //throw error to check the plan is not available
                    Log::alert("Plan " . $plan_code . " is not available, payment status :" . $payment_status);
                }
            } catch (Exception $ex) {
                Log::alert("Urgent : There is some problem in coding");
                Log::alert($ex->getMessage());
            }
        }
        return $payload;
    }
}
