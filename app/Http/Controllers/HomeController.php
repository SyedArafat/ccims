<?php

namespace App\Http\Controllers;

use App\CCIMS\Venue\VenueRepository;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index(Request $request)
    {
        $areas = app(VenueRepository::class)->all_areas();
        return view('website.home', compact('request', 'areas'));
    }

}
