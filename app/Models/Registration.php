<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //This Registration belongs to a runner
    public function runner()
    {
        return $this->belongsTo(Runner::class);
    }

    //This Registration belongs to a race
    public function race()
    {
        return $this->belongsTo(Race::class);
    }

    public function payment()
    {
        // Each registration has exactly one payment record
        return $this->hasOne(Payment::class);
    }
}
