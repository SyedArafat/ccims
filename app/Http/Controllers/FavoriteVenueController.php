<?php

namespace App\Http\Controllers;

use App\CCIMS\Venue\VenueRepository;
use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteVenueController extends Controller
{
    public function index(Request $request, VenueRepository $venueRepository)
    {
        $venues = Venue::with('area')->join('favourites', 'venues.id', '=', 'venue_id')->where('favourites.user_id', Auth::id())->paginate(10);
        return view('website.venue.favorite.index', compact('venues'));
    }
}
