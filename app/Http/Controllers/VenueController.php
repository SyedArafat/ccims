<?php

namespace App\Http\Controllers;

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
        return view('website.venue.create');
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
        return [
            "name" => "required",
            "venue_category" => "required",
            "capacity" => "required"
        ];
    }
}
