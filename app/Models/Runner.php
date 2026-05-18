<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    public function user()
    {
        // Tells Laravel this runner belongs to a User
        return $this->belongsTo(User::class);
    }

    public function registrations()
    {
        // A runner can sign up for many races over time
        return $this->hasMany(Registration::class);
    }
}
