<?php

namespace App\Http\Controllers;

use App\CCIMS\Venue\VenueBookingRepository;
use App\VenueBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VenueBookingController extends Controller
{
    private $bookingRepository;

    public function __construct(VenueBookingRepository $repository)
    {
        $this->bookingRepository = $repository;
    }

    public function pending_list()
    {
        $list = $this->bookingRepository->getPendingBookings();
        return view('website.venue.pending.index', compact('list'));
    }

    public function approve($id)
    {
        $booking = $this->bookingRepository->getBooking($id);
        if($this->bookingRepository->verifyAuthority($booking))
        {
            $booking->status = "approved";
            $booking->updated_by_id = Auth::id();
            $booking->save();
            Session::flash('success', "Status updated");
        }
        else {
            Session::flash('error', "You are not authorized to update this venue status");
        }
        return redirect()->back();

    }

    public function reject($id)
    {
        $booking = $this->bookingRepository->getBooking($id);
        if($this->bookingRepository->verifyAuthority($booking))
        {
            $booking->status = "declined";
            $booking->updated_by_id = Auth::id();
            $booking->save();
            Session::flash('success', "Status updated");
        }
        else {
            Session::flash('error', "You are not authorized to update this venue status");
        }
        return redirect()->back();

    }
}
