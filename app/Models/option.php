<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    protected $fillable = ['option', 'poll_id'];

    public function poll()
    {
        return $this->belongsTo(poll::class);
    }
    use HasFactory;
}
