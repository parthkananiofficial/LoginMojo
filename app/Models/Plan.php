<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public const PLANS = [
        "comboPlan6" => [
            "inr_price_id" => "price_1IrdQ9SAE3nPGOnvA1SSKk1X",
            "usd_price_id" => "price_1IrdQ8SAE3nPGOnv54sc6EUH",
            "uat_inr_price_id" => "price_1IjeJ3SAE3nPGOnvHbLVRnDy",
            "uat_usd_price_id" => "price_1Ij5fASAE3nPGOnvz88Jc9Kq",
            "validity" => 1,
            "verifications" => 1000,
            "usd_price" => 6,
            "inr_price" => 449
        ],
        "comboPlan19" => [
            "inr_price_id" => "price_1IrdxBSAE3nPGOnv0vh9ncmD",
            "usd_price_id" => "price_1IrdxBSAE3nPGOnvluJ7wwX5",
            "uat_inr_price_id" => "price_1IjeJ3SAE3nPGOnvHbLVRnDy",
            "uat_usd_price_id" => "price_1Ij5fASAE3nPGOnvz88Jc9Kq",
            "validity" => 3,
            "verifications" => 5000,
            "usd_price" => 19,
            "inr_price" => 1449
        ],
        "verificationTopup1000" => [
            "inr_price_id" => "price_1Ire46SAE3nPGOnvZgUasaPd",
            "usd_price_id" => "price_1Ire46SAE3nPGOnvCqJON680",
            "uat_inr_price_id" => "price_1IjeMYSAE3nPGOnvYdD77IVd",
            "uat_usd_price_id" => "price_1Ij5YpSAE3nPGOnvKvBpFpWV",
            "validity" => 0,
            "verifications" => 1000,
            "usd_price" => 4,
            "inr_price" => 299
        ],
        "verificationTopup5000" => [
            "inr_price_id" => "price_1Ire4xSAE3nPGOnvguBVbWFt",
            "usd_price_id" => "price_1Ire4xSAE3nPGOnvsclGYUrD",
            "uat_inr_price_id" => "price_1IjeM2SAE3nPGOnvFcPv76w8",
            "uat_usd_price_id" => "price_1Ij5ZmSAE3nPGOnv6S2iuMzq",
            "validity" => 0,
            "verifications" => 5000,
            "usd_price" => 14,
            "inr_price" => 1049
        ],
        "verificationTopup10000" => [
            "inr_price_id" => "price_1Ire5dSAE3nPGOnvO7OXv4ND",
            "usd_price_id" => "price_1Ire5dSAE3nPGOnv5DdzrbF3",
            "uat_inr_price_id" => "price_1IjeLZSAE3nPGOnvQoBcrWds",
            "uat_usd_price_id" => "price_1Ij5aqSAE3nPGOnvydOq5255",
            "validity" => 0,
            "verifications" => 10000,
            "usd_price" => 24,
            "inr_price" => 1799
        ],
        "validityTopup1Month" => [
            "inr_price_id" => "price_1Ire1aSAE3nPGOnvXLNSgFww",
            "usd_price_id" => "price_1Ire1aSAE3nPGOnvNoDj8Tdd",
            "uat_inr_price_id" => "price_1IjeL3SAE3nPGOnvnVJlqFXu",
            "uat_usd_price_id" => "price_1Ij5bmSAE3nPGOnvsR6xWGxP",
            "validity" => 1,
            "verifications" => 0,
            "usd_price" => 4,
            "inr_price" => 299
        ],
        "validityTopup3Months" => [
            "inr_price_id" => "price_1Ire29SAE3nPGOnvX4GOKA5f",
            "usd_price_id" => "price_1Ire2ASAE3nPGOnvbSkCoqPX",
            "uat_inr_price_id" => "price_1IjeKOSAE3nPGOnvuR3uZqnv",
            "uat_usd_price_id" => "price_1Ij5dISAE3nPGOnv56dm2B4Q",
            "validity" => 3,
            "verifications" => 0,
            "usd_price" => 9,
            "inr_price" => 699
        ],
        "validityTopup6Months" => [
            "inr_price_id" => "price_1Ire33SAE3nPGOnvchkDJ16U",
            "usd_price_id" => "price_1Ire34SAE3nPGOnvvcMFg2f4",
            "uat_inr_price_id" => "price_1IjeJwSAE3nPGOnv9rarDazO",
            "uat_usd_price_id" => "price_1Ij5djSAE3nPGOnvsa187tu4",
            "validity" => 6,
            "verifications" => 0,
            "usd_price" => 14,
            "inr_price" => 1049
        ],
    ];
}
