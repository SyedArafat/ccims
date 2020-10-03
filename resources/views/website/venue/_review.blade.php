<div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
    @if(!$has_review && getUserType() == getTypeCustomer())
        <div class="row mb-4 list-img-wrap">
            <div class="col-md-12">
                {!! Form::open(["method" => "post", "action" => ["ReviewController@store", $venue->id]]) !!}
                <h5 class="text-primary">Give a review</h5>
                <div>
                    <textarea style="color: black" required placeholder="Write an honest review about the place.." class="WYSIWYG form-control form-control-alternative" name="review" cols="40" rows="5" id="summary" spellcheck="true">{{ old('review') }}</textarea>
                </div>
                <div>
                    <button type="submit" style="padding: 11px; margin: 44px 0px;" class="btn btn-slack">Add Review</button>
                </div>
                {!! Form::close() !!}
            </div>
            <br>
        </div>
    @endif
    <br>
    @forelse($reviews as $review)
        <div class="row mb-4 list-img-wrap">
            <div class="col-md-2 list-img"><img class="img-fluid rounded-circle shadow-lg" src="@if($review->user->profile->profile_photo) {{ asset($review->user->profile->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif" alt="image">
            </div>
            <div class="col-md-10">
                <h5 class="text-primary">{{ $review->user->name }}</h5>
                <p>{{\Carbon\Carbon::parse($review->created_at)->diffForHumans()}}</p>
                <p>
                    {{ $review->review }}
                </p>
            </div>
        </div>
    @empty
        <div class="row"><h5>No review yet !</h5></div>
    @endforelse
</div>
