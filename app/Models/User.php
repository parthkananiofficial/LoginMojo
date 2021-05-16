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
        'valid_message_template' => 'Congratulations, Your account is verified successfully✅ \n Go back to your Website or Application',
        'invalid_message_template' => 'Sorry 🙇‍♀️, your session is expired / not found ',
        'throttle_message_template' => 'Sorry 🙇‍♀️, your daily limit exceeded',
        'duplicate_session_message_template' => 'Oops 😮, this session code has already been used',
        'web_domain' => null,
        'app_package_name' => null,
    ];

    public const DEFAULT_CREDIT = 100;

    public function isIndian()
    {
        if (strlen($this->mobile) === 12 && Str::startsWith($this->mobile, '91'))
            return true;
        else
            return false;
    }
    public function useCredit($credit_count = 1)
    {
        $this->update(['credit' => ($this->credit) - $credit_count]);
    }
    public function userwebhook()
    {
        return $this->hasMany(UserWebhook::class, "user_id");
    }
}
