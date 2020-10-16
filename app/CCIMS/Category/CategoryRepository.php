<?php

namespace App\CCIMS\Category;

use App\Venue;

class CategoryRepository
{
    /**
     * @return array
     */
    public function categoryVenueCount()
    {
        $venue_count = array();
        foreach (self::getCategory() as $cat)
        {
            $c = Venue::where('venue_category', $cat)->count();
            $venue_count[] = $c;
        }
        return $venue_count;
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    public static function getCategory()
    {
        return config('venue.categories');
    }
}
