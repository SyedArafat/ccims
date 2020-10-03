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
}
