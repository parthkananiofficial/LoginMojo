<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWebhook extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'url',
        'secured',
        'signature',
        'status'
    ];

    const STATUS_CREATED = "created";
}
