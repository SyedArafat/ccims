<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VenueController extends Controller
{
    public function create()
    {
        return view('website.venue.create');
    }
}
