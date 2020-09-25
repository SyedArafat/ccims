<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class VenueController extends Controller
{
    /**
     * @return View
     */
    public function create()
    {
        $areas = Area::all(['id', 'area_name']);
        return view('website.venue.create', compact('areas'));
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Http\RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules());
        if(($request->start_time == null && $request->end_time !=null) || $request->start_time !=null && $request->end_time == null)
        {
            Session::flash("error", "Invalid start time or end time. Please try again");
            return redirect()->back()->withInput();
        }
        return $request->all();
    }

    private function validationRules()
    {
        $categories = config('venue.categories');
        $cat = '';
        foreach ($categories as $category){
            $cat = $cat."$category".",";
        }
        return [
            "name"           => "required|max:255",
            "venue_category" => "required|in:$cat",
            "capacity"       => "required|numeric",
            "city"           => "required|max:255",
            "prices"         => "required",
            "prices.*"       => "numeric",
            "zip_code"       => "sometimes|max:5",
            "phone"          => "required|max:18",
            "start_time"     => "sometimes|nullable|date_format:H:i",
            "area_id"        => "required",
            "end_time"       => "sometimes|nullable|date_format:H:i",
            "email"          => "sometimes|email",
            "address"        => "required",
            "website"        => "sometimes|max:255"
        ];
    }
}
