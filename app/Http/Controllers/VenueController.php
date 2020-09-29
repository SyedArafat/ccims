<?php

namespace App\Http\Controllers;

use App\CCIMS\Venue\VenueRepository;
use App\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class VenueController extends Controller
{
    private $venueRepository;
    private $areas;

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

    /**
     * @param Venue $venue
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function edit(Venue $venue)
    {
        $areas = $this->venueRepository->all_areas();
        return view('website.venue.edit', compact('venue', 'areas'));
    }


    /**
     * @param Request $request
     * @param Venue $venue
     * @return \Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Venue $venue)
    {
        $this->validate($request, $this->venueRepository->validationRules(true));
        if (($request->start_time == null && $request->end_time != null) || $request->start_time != null && $request->end_time == null) {
            Session::flash("error", "Invalid start time or end time. Please try again");
            return redirect()->back()->withInput();
        }
        $this->venueRepository->update($request, $venue);
        Session::flash("success", "Venue updated");
        return redirect()->back();
    }

    public function indexList()
    {
        $areas  = $this->venueRepository->all_areas();
        $venues = $this->venueRepository->all();
        return view('website.venue.index_list', compact("areas",'venues'));
    }
}
