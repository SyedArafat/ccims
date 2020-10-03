<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store($venue_id, Request $request)
    {
        return $request->all();
    }
}
