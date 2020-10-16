<?php

namespace App\Http\Controllers;

use App\CCIMS\Category\CategoryRepository;
use App\CCIMS\Venue\VenueRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request, VenueRepository $venueRepository, CategoryRepository $categoryRepository)
    {
        $venue_count    = $categoryRepository->categoryVenueCount();
        $areas          = $venueRepository->all_areas();
        $popular_places = $venueRepository->getPopularVenues(6);
        return view('website.home', compact('request', 'areas', 'popular_places', 'venue_count'));
    }

}
