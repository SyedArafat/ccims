{!! Form::open(['method' => 'post', 'action' => ['ReviewController@update', $review->id]]) !!}
<div class="form-group">
    <label for="bio">Review:</label>
    <textarea required name="review" class="form-control form-control-text">{{ $review->review }}</textarea>
</div>
<button type="submit" class="btn btn-default">Update</button>

{!! Form::close() !!}
