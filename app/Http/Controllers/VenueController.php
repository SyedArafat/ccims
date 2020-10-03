<?php

namespace App\Http\Controllers;

use App\CCIMS\Venue\VenueRepository;
use App\Review;
use App\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function indexList(Request $request)
    {
        $areas  = $this->venueRepository->all_areas();
        $venues = Venue::with('area');
        if (isset($request->area_id)) $venues = $venues->where('area_id','=', $request->area_id);
        if (isset($request->venue_category)) $venues = $venues->where('venue_category','=', $request->venue_category);
        $venues = $venues->paginate(10);
        return view('website.venue.index_list', compact("areas",'venues', 'request'));
    }

    /**
     * @param Venue $venue
     * @return \Illuminate\Contracts\View\Factory|View
     */
    public function show(Venue $venue)
    {
        $is_fav         = (bool)Auth::user()->favourites->where('venue_id', $venue->id)->count();
        $booking_status = Auth::user()->venueBooking()->where('venue_id', $venue->id)->orderBy('created_at', 'desc')->first();
        $reviews        = Review::with('user.profile')->where('venue_id', $venue->id)->get();
        $has_review = (bool)(Auth::user()->reviews->where('venue_id', $venue->id)->count());
        return view('website.venue.show', compact('venue', 'is_fav', 'booking_status', 'reviews', 'has_review'));
    }
}
