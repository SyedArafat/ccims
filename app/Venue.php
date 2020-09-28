<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function prices()
    {
        return $this->hasMany(VenuePrice::class);
    }
}
