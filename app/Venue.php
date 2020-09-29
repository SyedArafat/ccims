<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function prices()
    {
        return $this->hasMany(VenuePrice::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class,'area_id', 'id');
    }
}
