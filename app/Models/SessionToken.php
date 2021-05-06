<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionToken extends Model
{
    use HasFactory;

    const STATUS_CREATED = "created";
    const STATUS_MESSAGE_RECEIVED = "received";

    protected $fillable = ["user_id","token","website_session","name","mobile","meta","status"];

    public function user()
    {
        $this->hasOne(User::class,'user_id');
    }
    public function meta()
    {
        $this->hasOne(SessionTokenMeta::class,'session_token_id');
    }
}
