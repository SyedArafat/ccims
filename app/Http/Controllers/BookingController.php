<?php

namespace App\Http\Controllers;

use App\VenueBooking;
use App\VenuePrice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            "booking_date"  => "required",
            "price_id" => "required"
        ]);
        $this->isAvailable($request);
        $price = VenuePrice::find($request->price_id)->price;
        VenueBooking::create([
            "venue_id"      => $request->venue_id,
            "user_id"       => Auth::id(),
            "price_id"      => $request->price_id,
            "price"         => $price,
            "date"          => Carbon::parse($request->booking_date)->toDateString(),
            "created_by_id" => Auth::id()
        ]);
        Session::flash("success", "Venue booked. Do necessary payment to make the booking confirmed.");
        return redirect()->back();
    }

    //TODO
    private function isAvailable($request)
    {
        $bookings = VenueBooking::where('venue_id', $request->venue_id)->where('date', Carbon::parse($request->booking_date)->toDateString());
        if($bookings) {
            $check = (bool)$bookings->where('price_id', $request->price_id)->count();
            if($check) return false;
        }
    }
}
