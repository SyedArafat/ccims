<?php

namespace App\CCIMS\Venue;

use App\Area;
use App\CCIMS\Files\FileManager;
use App\Venue;
use App\VenuePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueRepository
{
    use FileManager;

    private $model;

    public function __construct(Venue $venue)
    {
        $this->model = $venue;
    }

    /**
     * @return Area[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all_areas()
    {
        return Area::all(['id', 'area_name']);
    }

    /**
     * @param Request $request
     */
    public function store(Request $request)
    {
        $image = $this->storeFile($request, 'venue_image','venue_image');
        if($image) $this->model->venue_image = $image;
        $this->model->name           = $request->name;
        $this->model->venue_category = $request->venue_category;
        $this->model->capacity       = $request->capacity;
        $this->model->city           = $request->city;
        $this->model->area_id        = $request->area_id;
        $this->model->address        = $request->address;
        $this->model->description    = $request->description;
        $this->model->website        = $request->website;
        $this->model->phone          = $request->phone;
        $this->model->facebook       = $request->facebook;
        $this->model->facilities     = json_encode($request->facilities);
        $this->model->open_days      = json_encode($request->open_days);
        $this->model->start_time     = $request->start_time;
        $this->model->end_time       = $request->end_time;
        $this->model->created_by_id  = Auth::id();
        $this->model->save();
        $this->storePrices($request->prices);
    }

    /**
     * @param $prices
     */
    public function storePrices($prices)
    {
        foreach ($prices as $key => $price){
            VenuePrice::create([
                "venue_id"      => $this->model->id,
                "category_type" => $key,
                "price"         => $price,
                "created_by_id" => Auth::id()
            ]);
        }
    }

    /**
     * @return array
     */
    public function validationRules()
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
            "venue_image"    => "required|file|max:5000",
            "website"        => "sometimes|max:255"
        ];
    }
}
