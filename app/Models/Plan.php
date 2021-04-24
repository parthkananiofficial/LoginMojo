<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;
    public const PLANS = [
        "comboPlan99" => [
            "inr_price_id" => "price_1IjeJ3SAE3nPGOnvHbLVRnDy",
            "usd_price_id" => "price_1Ij5fASAE3nPGOnvz88Jc9Kq",
            "validity" => 1,
            "verifications" => 2000,
            "usd_price" => 99,
            "inr_price" => 7590
        ],
        "comboPlan199" => [
            "inr_price_id" => "price_1IjeIOSAE3nPGOnv7yvSrdsU",
            "usd_price_id" => "price_1Ij5foSAE3nPGOnvlV8Rohic",
            "validity" => 3,
            "verifications" => 10000,
            "usd_price" => 199,
            "inr_price" => 14990
        ],
        "verificationTopup1000" => [
            "inr_price_id" => "price_1IjeMYSAE3nPGOnvYdD77IVd",
            "usd_price_id" => "price_1Ij5YpSAE3nPGOnvKvBpFpWV",
            "validity" => 0,
            "verifications" => 1000,
            "usd_price" => 49,
            "inr_price" => 3690
        ],
        "verificationTopup5000" => [
            "inr_price_id" => "price_1IjeM2SAE3nPGOnvFcPv76w8",
            "usd_price_id" => "price_1Ij5ZmSAE3nPGOnv6S2iuMzq",
            "validity" => 0,
            "verifications" => 5000,
            "usd_price" => 99,
            "inr_price" => 7590
        ],
        "verificationTopup10000" => [
            "inr_price_id" => "price_1IjeLZSAE3nPGOnvQoBcrWds",
            "usd_price_id" => "price_1Ij5aqSAE3nPGOnvydOq5255",
            "validity" => 0,
            "verifications" => 10000,
            "usd_price" => 169,
            "inr_price" => 12690
        ],
        "validityTopup1Month" => [
            "inr_price_id" => "price_1IjeL3SAE3nPGOnvnVJlqFXu",
            "usd_price_id" => "price_1Ij5bmSAE3nPGOnvsR6xWGxP",
            "validity" => 1,
            "verifications" => 0,
            "usd_price" => 29,
            "inr_price" => 2190
        ],
        "validityTopup6Months" => [
            "inr_price_id" => "price_1IjeKOSAE3nPGOnvuR3uZqnv",
            "usd_price_id" => "price_1Ij5dISAE3nPGOnv56dm2B4Q",
            "validity" => 6,
            "verifications" => 0,
            "usd_price" => 99,
            "inr_price" => 7490
        ],
        "validityTopup12Months" => [
            "inr_price_id" => "price_1IjeJwSAE3nPGOnv9rarDazO",
            "usd_price_id" => "price_1Ij5djSAE3nPGOnvsa187tu4",
            "validity" => 12,
            "verifications" => 0,
            "usd_price" => 169,
            "inr_price" => 12690
        ],
    ];
}
