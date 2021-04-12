<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionToken extends Model
{
    use HasFactory;

    const STATUS_CREATED = "created";
    const STATUS_MESSAGE_RECEIVED = "received";

    protected $fillable = ["user_id","session","website_session","mobile","status"];
}
