<?php

namespace App\CCIMS\Venue;

use App\Area;
use App\CCIMS\Files\FileManager;
use App\Venue;
use App\VenuePrice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
     * @return Venue[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
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
        $this->model->zip_code       = $request->zip_code;
        $this->model->description    = $request->description;
        $this->model->website        = $request->website;
        $this->model->phone          = $request->phone;
        $this->model->facebook       = $request->facebook;
        $this->model->email          = $request->email;
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
     * @param bool $exception
     * @return array
     */
    public function validationRules($exception = false)
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
            "start_time"     => $exception ? "" : "sometimes|nullable|date_format:H:i",
            "area_id"        => "required",
            "end_time"       => $exception ? "" : "sometimes|nullable|date_format:H:i",
            "email"          => "sometimes|nullable|email",
            "address"        => "required",
            "venue_image"    => $exception ? "file|max:5000" : "required|file|max:5000",
            "website"        => "sometimes|max:255"
        ];
    }

    /**
     * @param Request $request
     * @param Venue $venue
     * @return Venue
     */
    public function update(Request $request, Venue $venue)
    {
        $new_image = false;
        if(isset($request->venue_image)) {
            $this->deleteFile($venue->venue_image);
            $new_image = $this->storeFile($request, 'venue_image','venue_image');
        }
        if($new_image) $venue->venue_image = $new_image;
        $venue->name           = $request->name;
        $venue->venue_category = $request->venue_category;
        $venue->capacity       = $request->capacity;
        $venue->city           = $request->city;
        $venue->area_id        = $request->area_id;
        $venue->address        = $request->address;
        $venue->description    = $request->description;
        $venue->website        = $request->website;
        $venue->phone          = $request->phone;
        $venue->zip_code       = $request->zip_code;
        $venue->email          = $request->email;
        $venue->facebook       = $request->facebook;
        $venue->facilities     = json_encode($request->facilities);
        $venue->open_days      = json_encode($request->open_days);
        $venue->start_time     = $request->start_time;
        $venue->end_time       = $request->end_time;
        $venue->updated_by_id  = Auth::id();
        $venue->save();
        $this->model = $venue;
        $this->update_price($request->prices);
        return $this->model;
    }

    private function update_price($prices)
    {
        foreach ($prices as $key => $price) {
            VenuePrice::where('id', $key)->update([
                "price"         => $price,
                "updated_by_id" => Auth::id()
            ]);
        }
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function getPopularVenues($limit = 3)
    {
        return Venue::join('favourites', 'venues.id', 'venue_id')
            ->groupBy("venues.id")->orderBy(DB::raw("count(venues.id)"), "desc")
            ->limit($limit)->select(["venues.*"])->get();
    }

}
