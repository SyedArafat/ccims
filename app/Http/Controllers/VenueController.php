<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
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
     * @return array
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->validationRules());
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
            "name"           => "required",
            "venue_category" => "required|in:$cat",
            "capacity"       => "required|numeric",
            "city"           => "required",
            "prices"         => "required",
            "prices.*"       => "numeric",
            "zip_code"       => "sometimes|max:5",
            "phone"          => "required|max:18",
            "start_time"     => "sometimes|nullable|date_format:H:i",
            "area_id"        => "required",
            "end_time"       => "sometimes|nullable|date_format:H:i",
        ];
    }
}
