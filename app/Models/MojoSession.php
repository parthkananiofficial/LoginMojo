<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MojoSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'website_session',
        'token',
        'mobile',
        'name'
    ];
}
