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
//        return $request->all();
        if($this->isAvailable($request)) {
            $price = VenuePrice::find($request->price_id)->price;
            VenueBooking::create([
                "venue_id" => $request->venue_id,
                "user_id" => Auth::id(),
                "price_id" => $request->price_id,
                "price" => $price,
                "date" => Carbon::parse($request->booking_date)->toDateString(),
                "created_by_id" => Auth::id()
            ]);
            Session::flash("success", "Venue booked. Do necessary payment to make the booking confirmed.");
        }
        else
        {
            Session::flash("error", "Venue not available at the current date and time. Choose another time");
        }
        return redirect()->back();
    }

    /**
     * @param $request
     * @return bool
     */
    private function isAvailable($request)
    {
        $bookings = VenueBooking::where('venue_id', $request->venue_id)->where('date', Carbon::parse($request->booking_date)->toDateString())->get();
        if($bookings) {
            if ($request->price_id == config('venue.full_day_id')) return false;
            else {
                foreach ($bookings as $booking) {
                    if($booking->price_id == config('venue.full_day_id')) return false;
                    elseif ($booking->price_id == $request->price_id) return false;
                }
            }
        }
        return true;
    }
}
