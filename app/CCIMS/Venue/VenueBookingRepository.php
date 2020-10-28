<?php

namespace App\CCIMS\Venue;

use App\VenueBooking;
use Illuminate\Support\Facades\Auth;

class VenueBookingRepository
{
    public function getPendingBookings()
    {
        return VenueBooking::with('customer', 'customer.profile', 'prices')->join('venues', 'venue_bookings.venue_id', 'venues.id')->where('venues.created_by_id', Auth::id())->where('venue_bookings.status','pending')->select('venue_bookings.*')->get();
    }

    public function getBooking($id)
    {
        return VenueBooking::find($id);
    }

    public function verifyAuthority(VenueBooking $booking)
    {
        $created_by = $booking->venue->created_by_id;
        return $created_by === Auth::id();
    }
}
