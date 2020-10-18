<style>
    .modal {
        /*position: absolute;*/
        top: 80px;
        right: 100px;
        /*bottom: 0;*/
        /*left: 0;*/
        /*z-index: 10040;*/
        /*overflow: auto;*/
        /*overflow-y: auto;*/
    }
    .form-control-text {
        color: black;
    }

</style>

<div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
    @auth()
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
    @endauth
    <br>
    @forelse($reviews as $review)
        <div class="row mb-4 list-img-wrap">
            <div class="col-md-2 list-img"><img class="img-fluid rounded-circle shadow-lg" src="@if($review->user->profile->profile_photo) {{ asset($review->user->profile->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif" alt="image">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-sm-10"><h5 class="text-primary">{{ $review->user->name }} </h5> </div>
                    @if(\Illuminate\Support\Facades\Auth::id() === $review->user_id)
                        <a class="edit-review-button" href="{{route('review.edit', $review->id)}}"><span class="col-sm-2"><i class="fa fa-edit" style="font-size:24px"></i></span></a>
                    @endif
                </div>
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

