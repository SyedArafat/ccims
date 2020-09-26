<?php

namespace App\Http\Controllers;

use App\CCIMS\Venue\VenueRepository;
use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class VenueController extends Controller
{
    private $venueRepository;

    public function __construct(VenueRepository $venue)
    {
        $this->venueRepository = $venue;
    }

    /**
     * @return View
     */
    public function create()
    {
        $areas = $this->venueRepository->all_areas();
        return view('website.venue.create', compact('areas'));
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->venueRepository->validationRules());
        if(($request->start_time == null && $request->end_time !=null) || $request->start_time !=null && $request->end_time == null)
        {
            Session::flash("error", "Invalid start time or end time. Please try again");
            return redirect()->back()->withInput();
        }

        $this->venueRepository->store($request);
        Session::flash("success", "Venue stored");
        return redirect()->back();
    }

    public function edit(Venue $venue)
    {
        $areas = $this->venueRepository->all_areas();
        return view('website.venue.edit', compact('venue', 'areas'));
    }
}
