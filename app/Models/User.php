<?php

namespace App\Models;

use Carbon\Carbon;
use Glorand\Model\Settings\Traits\HasSettingsField;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasSettingsField;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'password',
        'credit',
        'expired_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public $defaultSettings = [
        'throttle' => 10,
        'common_number' => true,
        'valid_message_template' => 'Thank you for Login',
        'invalid_message_template' => 'Session is Expired or not found',
        'throttle_message_template' => 'Your daily limit reached',
        'duplicate_session_message_template' => 'This session code is already used',
    ];

    public const DEFAULT_CREDIT = 100;

    public function isIndian()
    {
        return Str::startsWith($this->mobile, '+91 ');
    }
    public function useCredit($credit_count = 1)
    {
        $this->update(['credit' => ($this->credit) - $credit_count]);
    }
}
