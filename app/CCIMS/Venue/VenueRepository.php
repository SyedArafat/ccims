<?php

namespace App\CCIMS\Venue;

use App\Area;
use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueRepository
{
    private $model;

    public function __construct(Venue $venue)
    {
        $this->model = $venue;
    }

    public function all_areas()
    {
        return Area::all(['id', 'area_name']);
    }

    public function store(Request $request)
    {
        $this->model->name           = $request->name;
        $this->model->venue_category = $request->venue_category;
        $this->model->capacity = $request->capacity;
        $this->model->city = $request->city;
        $this->model->area_id = $request->area_id;
        $this->model->address = $request->address;
        $this->model->description = $request->description;
        $this->model->website = $request->website;
        $this->model->facebook = $request->facebook;
        $this->model->facilities = json_encode($request->facilities);
        $this->model->open_days = json_encode($request->open_days);
        $this->model->start_time = $request->start_time;
        $this->model->end_time = $request->end_time;
        $this->model->created_by_id = Auth::id();
        $this->model->save();
    }
}
