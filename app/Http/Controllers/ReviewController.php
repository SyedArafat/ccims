<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    /**
     * @param $venue_id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store($venue_id, Request $request)
    {
        $this->validate($request, ["review" => "required"]);
        $review                = new Review();
        $review->user_id       = Auth::id();
        $review->venue_id      = $venue_id;
        $review->review        = $request->review;
        $review->created_by_id = Auth::id();
        $review->save();
        Session::flash('success', "Review Added");
        return redirect()->back();
    }

    public function edit(Review $review)
    {
        return view('website.venue.review_edit_content', compact('review'));
    }

    /**
     * @param Review $review
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Review $review, Request $request)
    {
        $this->validate($request, [ "review" => "required" ]);
        $review->update(["review" => $request->review]);
        Session::flash("success", "Review updated");
        return redirect()->back();
    }
}
