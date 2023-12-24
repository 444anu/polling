<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class poll extends Model
{
    protected $fillable = ['question'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }
    use HasFactory;
}
