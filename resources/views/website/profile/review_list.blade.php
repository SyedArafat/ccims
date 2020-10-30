@forelse($user->reviews as $review)
<div class="row p-4 list-img-wrap">
    <div class="col-md-2 list-img">
        <img src="@if($user->profile->profile_photo) {{ asset($user->profile->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif" class="img-fluid rounded-circle shadow-lg" alt="image">
    </div>
    <div class="col-md-10">
        <h5 class="text-primary">{{ $user->name }} @<a href="{{route('venue.show', $review->venue_id)}}">{{ $review->venue->name }}</a></h5>
        <p>{{\Carbon\Carbon::parse($review->created_at)->diffForHumans()}}</p>
        <p>{{ $review->review }}</p>
        @if(\Illuminate\Support\Facades\Auth::id() === $review->user_id)
            <a class="edit-review-button" href="{{route('review.edit', $review->id)}}"><button class="btn btn-sm btn-primary" type="button">Edit</button></a>
        @endif

    </div>
</div>
@empty
    <div style="text-align: center;">
        <h6 style="padding: 25px 0px">No review has been made.</h6>
    </div>
@endforelse

