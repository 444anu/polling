<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class emailVerification extends Model
{
    protected $fillable = [
        'user_id',
        'is_verified_at',
        'token',
        'expired_at'
    ];
    use HasFactory;
}
