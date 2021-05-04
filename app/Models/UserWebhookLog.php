<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWebhookLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'uuid',
        'user_id',
        'webhook_id',
        'payload',
        'response',
        'status'
    ];

    public function userwebhook()
    {
        return $this->belongsTo(UserWebhook::class,"webhook_id");
    }
}
