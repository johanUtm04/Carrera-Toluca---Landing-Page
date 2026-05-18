<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    //
        //Relation with Registration Table
    public function Registration()
    {
    // A race has one Registration profile
        return $this->hasOne(Registration::class);
    }
}
