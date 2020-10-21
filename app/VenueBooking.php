<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VenueBooking extends Model
{
    protected $guarded = ['id'];

    public function prices()
    {
        return $this->belongsTo(VenuePrice::class, 'price_id','id');
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function venue()
    {
        return $this->belongsTo(Venue::class, 'venue_id', 'id');
    }
}
